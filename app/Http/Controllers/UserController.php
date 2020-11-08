<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config()
    {
        return view('user.config');
    }
    public function update(Request $request)
    {
        //get variable
        $user= \Auth::user(); 
        $id= \Auth::user()->id;
        //validations rules
        $validate = $this->validate ($request, [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users,email,'.$id
            ]);
        //getting values
        $name=$request->input('name');
        $email=$request->input('email');

        //news values in the object user
        $user->name = $name;
        $user->email = $email;

        //run query in the data base

        $user->update();

        return redirect()->route('config');
                        // ->with(['message'=>'Usuario Actualizado correctamente']);


    }/* se añadio la funcion update*/
}
