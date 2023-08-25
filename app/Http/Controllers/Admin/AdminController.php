<?php

namespace App\Http\Controllers\Admin;

use App\Mail\ReplyMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function adminHome()
    {
        $contacts = Contact::all();
        return view('admin.dashboard', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function replyMessage(Contact $contact)
    {
        return view('admin.reply_message', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function clientMessageReply(Request $request, Contact $contact)
    {
        $date = date('Y-m-d H:i:s');
        $filter_date = Carbon::parse($date)->diffForHumans();
        $mailData = [
            'name' => 'Abu Sayed',
            'reply_msg' => $request->reply_msg,
            'time' => $filter_date
        ];

        $contact->status = 1;
        $contact->save();
         
        Mail::to($request->client_email)->send(new ReplyMail($mailData));
        return redirect()->route('admin.dashboard')->with('success', 'Your mail send sucessfully');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
