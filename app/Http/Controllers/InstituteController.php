<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\InstituteRequest;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('isAdmin')) {

            return response('Access Denied!', 404) ;

        } else {

            $institutes = Institute::paginate(9);
            return view('admin.institutes.index', compact('institutes'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('creating url');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function edit(Institute $institute)
    {
        // dd($institute);
        return view('admin.institutes.edit', compact('institute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstituteRequest $request, Institute $institute)
    {
        // dd($request->all());
        $institute->update($request->all());
        if ($request->file('logo')) {
            $institute->addMedia('logo')->toMediaCollection('logo');
        }

        if ($request->file('banners')) {
            foreach ($request->file('banners') as $banner) {
                $institute->addMedia($banner)->toMediaCollection('banner');
            }
        }

        return redirect()->back()->with('message', 'Institute Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
