<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\User;
use App\Traits\Generics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    use Generics;

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
        $all_service = ['all_service' => Service::all()];
        return view('admin.admin_services')->with($all_service);
    }
    public function admin_portfolio()
    {
        $all_portfolio = ['all_portfolio' => Portfolio::all()];
        return view('admin.admin_portfolio')->with($all_portfolio);
    }
    public function admin_team()
    {
        $all_team = ['all_team' => Team::all()];
        return view('admin.admin_team')->with($all_team);
    }
    public function admin_general()
    {
        $settings = ['settings' => GeneralSetting::where('name', "Admin")->first()];
        return view('admin.admin_general')->with($settings);
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
    public function edit_service(Request $req)
    {
        $service_details = ['service_details' => Service::where('id', $req->id)->first()];
        return view('admin.edit_service')->with($service_details);
    }
    public function edit_team(Request $req)
    {
        $team_details = ['team_details' => Team::where('id', $req->id)->first()];
        return view('admin.edit_team')->with($team_details);
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

    public function upload_service(Request $req)
    {
        $req->validate([
            'name' => 'required'
        ]);
        Service::create([
            'name' => $req->name
        ]);
        return back()->with('uploaded', "The new service has been uploaded successfully");
    }

    public function do_edit_service(Request $req)
    {
        $data = Service::where('id', $req->id)->first();
        $data->update([
            'name' => $req->name
        ]);
        return back()->with('updated', "Service name Update was Successfull!");
    }

    public function delete_service(Request $req)
    {
        $data = Service::where('id', $req->id)->first();
        $data->delete();
        return back()->with('deleted', "Service has been deleted Successfully");
    }
    public function delete_team(Request $req)
    {
        $data = Team::where('id', $req->id)->first();
        $data->delete();
        return back()->with('deleted', "Team member has been deleted Successfully");
    }

    public function upload_team(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);

        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('teams', $name, 'public');

            Team::create([
                'name' => $req->name,
                'position' => $req->position,
                'image' => '/storage/' . $filePath
            ]);

            return back()->with('uploaded', "The new team member has been uploaded successfully");
        }
    }

    public function do_edit_team(Request $req)
    {
        $data = Team::where('id', $req->id)->first();
        $req->validate([
            'image' => 'mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);
        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('teams', $name, 'public');

            $data->image = '/storage/' . $filePath;
            return $this->updateTeam($req, $data);
        } else {
            return $this->updateTeam($req, $data);
        }
    }

    public function edit_setting(Request $req)
    {
        $data = GeneralSetting::where('name', "Admin")->first();

        $data->update([
            'clients'=>$req->clients,
            'posts'=>$req->posts,
            'finished'=>$req->finished
        ]);

        return back()->with('updated', "General Settings was updated successfully");
    }
}
