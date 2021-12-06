<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\DealRequest;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\User;
use App\Notifications\ContactRequestNotification;
use App\Notifications\DealRequestNotification;
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
        $all_team = ['all_team' => Team::all()];
        return view('/team')->with($all_team);
    }

    public function services()
    {
        $all_service = ['all_service' => Service::all()];
        return view('/services')->with($all_service);
    }

    public function portfolio()
    {
        $all_portfolio = ['all_portfolio' => Portfolio::all()];
        return view('/portfolio')->with($all_portfolio);
    }

    public function contact()
    {
        return view('/contact');
    }
    public function lets_deal()
    {
        return view('/lets-deal');
    }

    public function do_contact(Request $request)
    {
        ContactMessage::create([
            'message_id' => $this->createUniqueRand('contact_messages', 'message_id'),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description
        ]);
        $user = User::where('name', "Admin")->first();
        $user->notify(new ContactRequestNotification($request->name, $request->email, $request->phone, $request->description));
        return back()->with('sent', "Your message has been sent successfully, we'd contact you immediately");
    }

    public function process_deal(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'description'=>'required',
        ]);
        DealRequest::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'organization'=>$request->organization,
            'description'=>$request->description
        ]);
        $user = User::where('name', "Admin")->first();
        $user->notify(new DealRequestNotification($request->name, $request->email, $request->phone, $request->organization, $request->description));
        return back()->with('sent', "Your request for a deal with ".env('APP_NAME'). " was sent successfully, we'd definately get in touch with you immediately. Thank you");
    }
}
