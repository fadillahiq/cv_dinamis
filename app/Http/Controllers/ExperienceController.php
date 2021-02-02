<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExperienceController extends Controller
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
            $experiences = Experience::where('company', 'LIKE', "%{$search}%")->simplePaginate(10);
        }else {
            $experiences = Experience::latest()->simplePaginate(10);
        }

        return view('experiences.index', [
            'experiences' => $experiences
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
        return view('experiences.create');
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
            'company' => 'required',
            'job_desc' => 'required',
            'certificate' => 'required',
            'start_work' => 'required|date',
            'end_work' => 'required|date',
        ]);


        Experience::create($request->all());

        return redirect()->route('experiences.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('experiences.edit', [
            'experience' => $experience
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'company' => 'required',
            'job_desc' => 'required',
            'certificate' => 'required',
            'start_work' => 'required|date',
            'end_work' => 'required|date',
        ]);

        $experience->update($request->all());

        return redirect()->route('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('experiences.index');
    }
}
