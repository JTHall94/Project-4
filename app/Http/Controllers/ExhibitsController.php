<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exhibits/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = new \App\Exhibits;
        $e->user_id = \Auth::id();
        $e->name = $request->input('new_exhibit_name');
        $e->year = $request->input('new_exhibit_year');
        $e->artist = $request->input('new_exhibit_artist');
        $e->url = $request->input('new_exhibit_url');
        $e->description = $request->input('new_exhibit_description');
        $e->save();

        $request->session()->flash('status', 'New exhibit created. Thanks!');

        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Display an exhibit, only for viewing. This is good for individual viewing.";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $e = \App\Exhibits::find($id);
        return view('exhibits/edit', compact('e'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $e = \App\Exhibits::find($id);
        $e->name = $request->input('updated_exhibit_name');
        $e->year = $request->input('updated_exhibit_year');
        $e->artist = $request->input('updated_exhibit_artist');
        $e->url = $request->input('updated_exhibit_url');
        $e->description = $request->input('updated_exhibit_description');
        $e->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = \App\Exhibits::find($id);
        return view('exhibits/delete', compact('e'));
    }
}
