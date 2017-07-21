<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function indexPage()
    {
        return view('welcome');
    }

    public function pricePage()
    {
        return view('price');
    }

    public function aboutUsPage()
    {
        return view('about_us');
    }

    public function contactUsPage()
    {
        return view('contact_us');
    }
    public function contactUsPost(Request $request)
    {
        $this->validate($request, [
           'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'bodyMessage'=>$request->message
        );

        Mail::send('email.mail_layout', $data, function($message) use($data) {
          $message->from($data['email']);
          $message->to('82486152fa-51bfc7@inbox.mailtrap.io');
       });

        Session::flash('suceess', 'Your message was sent!' );
        return redirect()->route('welcome');
    }
}
