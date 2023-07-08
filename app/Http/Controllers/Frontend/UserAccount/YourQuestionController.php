<?php

namespace App\Http\Controllers\Frontend\UserAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\SubCategory;
use App\BuyerQuestion;
use Auth;
use Carbon\Carbon;
use App\Notifications\SellerAnswerNotification;
use DB;
use SEOMeta;
use OpenGraph;

class YourQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $this->seoIndex();

        $your_questions = BuyerQuestion::categoryFilter(request('category'))
                                        ->subCategoryFilter(request('sub_category'))
                                        ->where('asked_by', Auth::user()->id)
                                        ->whereHas('product', function ($query) {
                                            $query->where('status', 1)
                                                  ->where('created_by', '!=', Auth::user()->id)
                                                  ->where('expiry_period', '>', Carbon::now());
                                        })
                                        ->yourQuestionSearch(request('search-item'))
                                        ->latest()
                                        ->paginate(config('product.table_paginate'));

        $categories = Category::select('title', 'slug')->get();
        $sub_categories = SubCategory::select('title', 'slug')->get();

        return view('frontend.user-dashboard.your-question.index', compact('your_questions', 'categories', 'sub_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewReply($question_id)
    {

        if(request('notify_id')) {
            DB::table('notifications')->where('id', request('notify_id'))->where('read_at', null)->update(['read_at' => now()]);
        }

       $your_question = BuyerQuestion::where('question_id', $question_id)
                                        ->where('asked_by', Auth::user()->id)
                                        ->whereHas('product', function ($query) {
                                            $query->where('created_by', '!=', Auth::user()->id)
                                                    ->where('status', 1)
                                                    ->where('expiry_period', '>', Carbon::now());
                                        })->firstOrFail();

        $this->seoViewReply($your_question);

        $your_question->update([
            'is_read' => 1
        ]);

        return view('frontend.user-dashboard.your-question.view-reply', compact('your_question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($question_id)
    {
        $your_question = BuyerQuestion::where('question_id', $question_id)
                                        ->where('asked_by', Auth::user()->id)
                                        ->whereHas('product', function ($query) {
                                            $query->where('created_by', '!=', Auth::user()->id)
                                                    ->where('status', 1)
                                                    ->where('expiry_period', '>', Carbon::now());
                                        })->firstOrFail();

        return view('frontend.user-dashboard.your-question.edit', compact('your_question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $question_id)
    {
        $your_question = BuyerQuestion::where('question_id', $question_id)
                                        ->where('asked_by', Auth::user()->id)
                                        ->whereHas('product', function ($query) {
                                            $query->where('created_by', '!=', Auth::user()->id)
                                                    ->where('status', 1)
                                                    ->where('expiry_period', '>', Carbon::now());
                                        })->firstOrFail();

        $this->validate($request, [
            'question'  => 'required|min:2|max:256',
        ]);

        try {
            $your_question->update([
                'question' => request('question')
            ]);

            $notification = array(
                'message'    => 'Your question has been updated successfully.',
                'alert-type' => 'success'
            );
          
            return redirect()->route('your-question.index')->with($notification);

        } catch (\Exception $exception) {
            logger()->error($exception->getMessage());
            $notification = array(
                'message'    => 'Internal Error, Please try again later.',
                'alert-type' => 'error'
             );

            return redirect()->route('your-question.index')->with($notification);
        }
    }

    private function seoIndex()
    {
        SEOMeta::setTitle(Auth::user()->name."'s Asked Questions -".env("APP_NAME"));
        SEOMeta::setDescription(env('APP_NAME').' - View the list of your questions and see the reply of the seller.');
        SEOMeta::setCanonical(route('your-question.index'));
        SEOMeta::addKeyword(['obsnepal', 'asked-question', 'view-reply', 'buy', 'sell', 'brand', 'new', 'used', 'kathmandu', 'pokhara', 'secondhand', 'cheap', 'popular', 'product']);
        
        OpenGraph::setTitle(Auth::user()->name."'s Asked Questions -".env("APP_NAME"));
        OpenGraph::setDescription(env('APP_NAME').' - View the list of your questions and see the reply of the seller.');
        OpenGraph::setUrl(route('your-question.index'));
    }

    private function seoViewReply($question)
    {
        SEOMeta::setTitle(Auth::user()->name."'s Asked Question Reply -".env("APP_NAME"));
        SEOMeta::setDescription(env('APP_NAME').' - View the seller reply of the product and give response to it.');
        SEOMeta::setCanonical(route('your-question.view-reply', $question->question_id));
        SEOMeta::addKeyword(['obsnepal', 'view-reply', 'buy', 'sell', 'brand', 'new', 'used', 'kathmandu', 'pokhara', 'secondhand', 'cheap', 'popular', 'product']);
        
        OpenGraph::setTitle(Auth::user()->name."'s Asked Question Reply -".env("APP_NAME"));
        OpenGraph::setDescription(env('APP_NAME').' - View the seller reply of the product and give response to it.');
        OpenGraph::setUrl(route('your-question.view-reply', $question->question_id));
    }
}
