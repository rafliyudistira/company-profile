<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMailController extends Controller
{
    public function index(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = '(Name) ->' . ' ' . $request->input('name') . '  ' . '(E-Mail) ->' . '  ' . $request->input('email') . '  ' . ' (Message) -> ' . '  ' . $request->input('message');

        $data_mail = [
            'sender_name' => $name,
            'sender_email' => $email,
            'subject' => $subject,
            'message' => $message
        ];
        Mail::to("afysaid@gmail.com")->send(new sendMail($data_mail));

        return redirect()->to(url('/contact'))->with('success', 'Email has been sent successfully!');
    }
}
