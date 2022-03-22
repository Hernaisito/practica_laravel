<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStreamersRequest;
use App\Http\Requests\UpdateStreamersRequest;
use App\Models\Streamers;

class StreamersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dirigir a nuestro index, en este caso el listado
        $streamers = Streamers::all();
        return view('streamer.listado', ['streamers'=>$streamers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Es invocado por listado y devuelve la vista crear
        return view('streamer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStreamersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreamersRequest $request)
    {
        //Guarda en un buffer los datos nuevos
        $streamer = new Streamers($request->input());
        $streamer->saveOrFail();
        //Los mete en la tabla total y los pasa a listado
        $streamers = Streamers::all();
        return view('streamer.listado',['streamers'=>$streamers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Streamers  $streamers
     * @return \Illuminate\Http\Response
     */
    public function show(Streamers $streamer)
    {

        //
        return view('streamer.show',['streamer'=>$streamer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Streamers  $streamer
     * @return \Illuminate\Http\Response
     */
    public function edit(Streamers $streamers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreamersRequest  $request
     * @param  \App\Models\Streamers  $streamer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreamersRequest $request, Streamers $streamer)
    {
        //
        $streamer->update($request->input());
        $streamers= Streamers::all();
        return view('streamer.listado',['streamers'=>$streamers]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Streamers  $streamer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streamers $streamer)
    {
        //
        $streamer->delete();
        $streamers = Streamers::all();
        return view('streamer.listado',['streamers'=>$streamers]);
    }

    public function devolver_tabla(){
        $streamers = Streamers::all();
        return view('streamer.listado',['streamers'=>$streamers]);
    }
}
