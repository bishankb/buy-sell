<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;
use SEOMeta;
use OpenGraph;

class RuleTipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->seoRuleTip();
       
        $contact_us = ContactUs::first();
        
        return view('frontend.rule-tip.index', compact('contact_us'));
    }

    private function seoRuleTip()
    {
        SEOMeta::setTitle('Posting Rules and Safety Tips -'.env('APP_NAME'));
        SEOMeta::setDescription('Posting Rules and Safety Tips on '.env('APP_NAME').'. Please follow the rules of posting your products. Also follow the tips for beings safe.');
        SEOMeta::setCanonical(route('frontend.rule-tip'));
        SEOMeta::addKeyword(['obsnepal', 'postingRules', 'safetytips', 'nepal', 'Pokhara', 'kathmandu', 'secondhand']);
        
        OpenGraph::setTitle('Posting Rules and Safety Tips -'.env('APP_NAME'));
        OpenGraph::setDescription('Posting Rules and Safety Tips on '.env('APP_NAME').'. Please follow the rules of posting your products. Also follow the tips for beings safe.');
        OpenGraph::setUrl(route('frontend.rule-tip'));
    }
}
