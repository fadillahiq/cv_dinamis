<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator as PaginationPaginator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = request()->query('search');

        if($search)
        {
            $profiles = Profile::where('email', 'LIKE', "%{$search}%")->simplePaginate(1);
        }else {
            $profiles = Profile::latest()->simplePaginate(1);
        }

        return view('profiles.index', [
            'profiles' => $profiles
        ])
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'passion' => 'required',
            'about' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'age' => 'required',
            'email' => 'required',
            'telegram' => 'required',
            'whatsapp' => 'required',
        ]);

        $path = $request->file('image')->store('public/images');
        $dashboard = new Profile;
        $dashboard->name = $request->name;
        $dashboard->email = $request->email;
        $dashboard->passion = $request->passion;
        $dashboard->about = $request->about;
        $dashboard->country = $request->country;
        $dashboard->city = $request->city;
        $dashboard->street = $request->street;
        $dashboard->age = $request->age;
        $dashboard->telegram = $request->telegram;
        $dashboard->whatsapp = $request->whatsapp;
        $dashboard->image = $path;
        $dashboard->save();

        return redirect()->route('profiles.index')
        ->with('success','Profile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'passion' => 'required',
            'about' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'age' => 'required',
            'email' => 'required',
            'telegram' => 'required',
            'whatsapp' => 'required',
        ]);

        $dashboard = Profile::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $dashboard->image = $path;
        }
        $dashboard->name = $request->name;
        $dashboard->email = $request->email;
        $dashboard->passion = $request->passion;
        $dashboard->about = $request->about;
        $dashboard->country = $request->country;
        $dashboard->city = $request->city;
        $dashboard->street = $request->street;
        $dashboard->age = $request->age;
        $dashboard->telegram = $request->telegram;
        $dashboard->whatsapp = $request->whatsapp;
        $dashboard->save();

        return redirect()->route('profiles.index')
                        ->with('success','Profile updated successfully');
    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profiles.index')
                        ->with('success','Profile has been deleted successfully');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
