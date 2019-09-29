<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Aspirante;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aspirante()
    {
        return view('register.aspirante');
    }
    public function aspiranteStore(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->telefono;
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('user_roles')->insert(
            ['user_id' => $user->id, 'role_id' => 4]
        );

        $aspirante = new Aspirante();
        $aspirante->nombre=$request->name;
        $aspirante->user_id = $user->id;
        $aspirante->telefono = $request->telefono;
        $aspirante->save();
    }
}
