<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\User;
use App\Notifications\ContactRequestNotification;
use App\Traits\Generics;
use Illuminate\Http\Request;

class MainController extends Controller
{
    use Generics;
    //

    public function about()
    {
        return view('/about');
    }

    public function team()
    {
        return view('/team');
    }

    public function services()
    {
        return view('/services');
    }

    public function portfolio()
    {
        return view('/portfolio');
    }

    public function contact()
    {
        return view('/contact');
    }

    public function do_contact(Request $request)
    {
        ContactMessage::create([
            'message_id'=>$this->createUniqueRand('contact_messages', 'message_id'),
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'description'=>$request->description
        ]);
        $user = User::where('name', "Admin")->first();
        $user->notify(new ContactRequestNotification($request->name, $request->email, $request->phone, $request->description));
        return back()->with('sent', "Your message has been sent successfully, we'd contact you immediately");
    }
}
