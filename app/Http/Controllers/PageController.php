<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Home Page
     */
    public function home()
    {
        return view('home');
    }

    /**
     * About Page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Services Page
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Contact Page (GET)
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle Contact Form Submission (POST)
     */
    public function sendContact(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Send email using the exact address from your business card
        Mail::raw(
            "Name: {$request->name}\n" .
            "Email: {$request->email}\n" .
            "Subject: {$request->subject}\n\n" .
            "Message:\n{$request->message}",
            function ($mail) use ($request) {
                $mail->to('info@eliemutukuassociates.co.ke')
                     ->subject($request->subject ?? 'New Consultation Request from Website')
                     ->from($request->email, $request->name)
                     ->replyTo($request->email);
            }
        );

        // Redirect back with success message (used in contact.blade.php)
        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your message has been sent. We will get back to you soon.');
    }
}