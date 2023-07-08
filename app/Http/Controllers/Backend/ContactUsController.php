<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;
use Auth;

class ContactUsController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(Auth::user()->hasPermissionTo('view_dashboards')) {
            $contact_us = ContactUs::first();
            if(isset($contact_us)) {
                return view('backend.contact-us.edit', compact('contact_us'));
            } else {
                return view('backend.contact-us.edit');
            }
        } else {
            abort('404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(Auth::user()->hasPermissionTo('view_dashboards')) {
            $contact_us = ContactUs::first();

            $this->validate(
                $request,
                [
                    'name1'             => 'nullable|min:2|max:100',
                    'name2'             => 'nullable|min:2|max:100',
                    'address'           => 'nullable|min:2|max:100',
                    'phone1'            => 'nullable|min:5|max:20',
                    'phone2'            => 'nullable|min:5|max:20',
                    'fax'               => 'nullable|min:5|max:20',
                    'email'             => 'nullable|email',
                    'facebook'          => 'nullable|min:2|max:100',
                    'google_plus'       => 'nullable|min:2|max:100',
                    'twitter'           => 'nullable|min:2|max:100',
                    'map_embedded_link' => 'nullable|min:2',
                ]
            );

            try {
                if (!$contact_us) {
                    $contact_us = ContactUs::create(
                        [
                            'name1'             => request('name1'),
                            'name2'             => request('name2'),
                            'phone1'            => request('phone1'),
                            'phone2'            => request('phone2'),
                            'fax'               => request('nepali_phone1'),
                            'email'             => request('email'),
                            'facebook'          => request('facebook'),
                            'twitter'           => request('twitter'),
                            'google_plus'       => request('google_plus'),
                            'map_embedded_link' => request('map_embedded_link')
                        ]
                    );
                } else {
                    $contact_us->update(
                        [
                            'name1'             => request('name1'),
                            'name2'             => request('name2'),
                            'phone1'            => request('phone1'),
                            'phone2'            => request('phone2'),
                            'fax'               => request('nepali_phone1'),
                            'email'             => request('email'),
                            'facebook'          => request('facebook'),
                            'twitter'           => request('twitter'),
                            'google_plus'       => request('google_plus'),
                            'map_embedded_link' => request('map_embedded_link')
                        ]
                    );
                }
                flash('Contact Us detail updated successfully.')->success();
            } catch (\Exception $exception) {
                logger()->error($exception->getMessage());
                flash('There was some intenal error while updating the contact us detail.')->error();
            } 
            
            return redirect(route('contact-us.edit'));

        } else {
            abort('404');
        }
    }
}
