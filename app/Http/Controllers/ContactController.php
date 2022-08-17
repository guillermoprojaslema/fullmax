<?php

namespace App\Http\Controllers;

use App\Contactmessage;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact-us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ContactRequest;
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {

        $contactEmail = setting('site.email');

        try {
            Mail::to($contactEmail)->send(new Contact($request));

            return redirect()
                ->route('contact-us.create')
                ->with('success', __('Email sent successfully'));

        } catch (\Exception $exception) {
            $contactMessage          = new Contactmessage();
            $contactMessage->name    = $request->name;
            $contactMessage->email   = $request->email;
            $contactMessage->phone   = $request->phone;
            $contactMessage->subject = $request->subject;
            $contactMessage->message = $request->message;
            $contactMessage->save();

            return redirect()
                ->route('contact-us.create')
                ->with('success', __('We will contact you as soon as possible'));
        }

        return redirect()
            ->route('contact-us.create')
            ->with('error', __('Something went wrong'));

    }
}
