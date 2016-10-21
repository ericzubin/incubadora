<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\Alumno;
use View;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;



class UniversitarioController extends Controller
{
      public function index()
    {
 		$alumnos = Alumno::all();    //Eloquent ORM method to return all matching results
        // load the view and pass the nerds
        return View::make('universitarios.index')
            ->with('alumnos', $alumnos);
    }

    public function create()
    {
             
                return View::make('universitarios.create');  

 
}

public function store(Request $request)
{
    try
        {




$input = $request->all();    
Alumno::create($input);

    Session::flash('flash_message', 'Pantalla agregada correctamente');

    return redirect()->back();
        }
         catch (FormValidationException $e)
        {
            // Failed.
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
}

   public function edit($id)
    {
        // get the nerd
        $alumno = Alumno::find($id);

        // show the edit form and pass the nerd
        return View::make('universitarios.edit')
            ->with('alumno', $alumno);
    }

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
  
		        $alumno = Alumno::find($id);

        // show the view and pass the nerd to it
        return View::make('universitarios.show')
            ->with('alumno', $alumno);
    }
  
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 
        Alumno::find($id)->delete();

        Session::flash('message', 'Se borro con exito este alumno');
        //Redirecting to index() method
        return redirect()->route('universitarios.index');	
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
  
   try
        {
                    // store
            $alumno = Alumno::find($id);
            $alumno->nombre       = $request->input('nombre');
            $alumno->email      = $request->input('email');
            $alumno->telefono = $request->input('telefono');
            $alumno->carrera = $request->input('carrera');
            $alumno->interes = $request->input('interes');

            $alumno->save();

            // redirect
            Session::flash('message', 'Se modifico correctamente los datos del alumno');
            return redirect()->route('universitario.index');	
        }

         catch (FormValidationException $e)
        {
            // Failed.
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }      
    }
 
    }

///https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
