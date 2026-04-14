<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactEmail;
use App\Mail\QuotationMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(ContactRequest $request)
    {
        $mail = new ContactEmail(
            $request->input('name'),
            $request->input('email'),
            $request->input('message')
        );

        Mail::send($mail);

        flash('Email wysłany');

        return back();
    }

    public function quotation(ContactRequest $request)
    {
        $mail = new QuotationMail(
            $request->input('name'),
            $request->input('email'),
            $request->input('message'),
            $request->input('employees')
        );

        Mail::send($mail);

        flash('Email wysłany');

        return back();
    }
}
