<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the view to send contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact.index');
    }

    /**
     * Send a newly created contact to email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sent = Mail::to(config('mail.to.address'), config('mail.to.name'))->send(new Contact([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]));

        return to_route('base.home')->with('server_data', [
            'msg' => [
                'type' => 'success',
                'content' => 'Contact sent.'
            ]
        ]);
    }
}
