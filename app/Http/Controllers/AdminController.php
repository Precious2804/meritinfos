<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function syslogin()
    {
        return view('/syslogin');
    }

    public function do_login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (User::Where('email', $req->email)->exists() == true) {

            $credentials = ['email' => $req->email, 'password' => $req->password];
            if (Auth::validate($credentials) == true) {
                Auth::attempt($credentials, $req->remember_me == 'on' ? true : false);

                return redirect()->to(route('dashboard'));
            } else {
                return redirect()->back()->with('info', 'Incorrect password!, please check your credentials and try again.')->withInput($req->only('loginEmail'));
            }
        } else {
            return redirect()->back()->with('infoEmail', 'Email address does not exist!, please check your credentials and try again.');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function admin_services()
    {
        return view('admin.admin_services');
    }
    public function admin_portfolio()
    {
        $all_portfolio = ['all_portfolio' => Portfolio::all()];
        return view('admin.admin_portfolio')->with($all_portfolio);
    }
    public function admin_team()
    {
        return view('admin.admin_team');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/syslogin');
    }

    public function edit_port(Request $req)
    {
        $port_details = ['port_details' => Portfolio::where('id', $req->id)->first()];
        return view('admin.edit_port')->with($port_details);
    }

    public function upload_portfolio(Request $req)
    {
        $req->validate([
            'project' => 'required',
            'description' => 'required',
            'url' => 'required|url',
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);

        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('portfolio', $name, 'public');

            Portfolio::create([
                'project' => $req->project,
                'description' => $req->description,
                'url' => $req->url,
                'image' => '/storage/' . $filePath
            ]);

            return back()->with('uploaded', "The new Portfolio details has been uploaded successfully");
        }
    }

    // a function to make the profile update dynamic
    private function update($req, $data)
    {
        $data->project = $req->project;
        $data->description = $req->description;
        $data->url = $req->url;
        $data->save();

        return back()->with('updated', "Portfolio Update was Successfull!");
    }

    public function do_edit_port(Request $req)
    {
        $data = Portfolio::where('id', $req->id)->first();
        $req->validate([
            'image' => 'mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);
        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('portfolio', $name, 'public');

            $data->image = '/storage/' . $filePath;
            return $this->update($req, $data);
        } else {
            return $this->update($req, $data);
        }
    }
}
