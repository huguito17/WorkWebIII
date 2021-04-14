<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\mensajerecibido;
use Illuminate\Http\Request;

class messController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return request('nombre');
        /*
        return $request->get('nombre');
        return $request->get('email');
        return $request->get('subject');
        return $request->get('contenido');*/
        $msg = request()-> validate(
        [
            'nombre'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'contenido'=>'required',

        ],
        [
            'name.required' =>__('I need your name')
        ]
        );
        Mail::to('jgurrerofugon500@gmail.com')->queue(new mensajerecibido($msg));
        return new mensajerecibido($msg);
        return 'Mensaje enviado';


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
    public function edit($id)
    {
        //
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
        //
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
