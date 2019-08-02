<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'message' => 'required'
            ]);

        Mail::to('avetyansonak@gmail.com')->send(new ContactMailForm($data));
//        session()->flash('message',' Thanks for your message. We\'ll be in touch'); It's the alternative way to show the message
        return redirect('contact')->with('message',' Thanks for your message. We\'ll be in touch');
    }
}
