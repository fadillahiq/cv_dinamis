<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\Mail\SendMail;
use App\Models\Experience;

class PortofolioController extends Controller
{
    public function index()
    {
        $datas = Profile::get();
        $experiences = Experience::get();

        return view('welcome', [
            'datas' => $datas,
            'experiences' => $experiences
        ]);
    }

    public function master()
    {
        $datas = Profile::get();

        return view('master', [
            'datas' => $datas
        ]);
    }

    public function portofolio()
    {
        $datas = Profile::get();
        $projects = Project::get();

        return view('portofolio', [
            'datas' => $datas,
            'projects' => $projects
        ]);
    }

    public function contact()
    {
        $datas = Profile::get();
        return view('contact', [
            'datas' => $datas
        ]);
    }

    public function contactPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
          ]);

          $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
          ];

          Mail::to('laku0505@gmail.com')->send(new SendMail($data));
          toastr()->success('I will contact you soon!', 'Success');
          return back();
    }
}
