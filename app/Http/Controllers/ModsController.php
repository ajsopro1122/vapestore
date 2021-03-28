<?php

namespace App\Http\Controllers;

use App\Mod;
use Illuminate\Http\Request;

class ModsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mod::all();
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
            'make' => 'required',
            'brand' => 'required',
            'description' => 'required',

        ]);

        return Mod::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mod  $mod
     * @return \Illuminate\Http\Response
     */
    public function show(Mod $mod)
    {
        return Mod::with('transaction')->where('mods.id', $mod->id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mod  $mod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mod $mod)
    {
        $mod = Mod::find($mod->id);
        $mod->update($request->all());
        return $mod;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mod  $mod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mod $mod)
    {
        return Mod::destroy($mod->id);
    }
}
