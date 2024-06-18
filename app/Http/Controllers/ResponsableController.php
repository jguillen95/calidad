<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Usertype;
use GuzzleHttp\Psr7\Message;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $responsables=User::select('users.id','users.name','users.username','users.email','users.password','users.usertype_id','users.puesto','users.status','usertypes.type')
        ->join('usertypes', 'usertypes.id', '=', 'users.usertype_id')
        ->get();
        $responsables2=User::select('users.id','users.name','users.username','users.email','users.password','users.usertype_id','users.puesto','users.status','usertypes.type')
        ->join('usertypes', 'usertypes.id', '=', 'users.usertype_id')
        ->where('usertype_id','!=' , 1)
        ->get();
        $user_login=auth()->user()->usertype_id;
        return view('responsable.index', compact('responsables','user_login', 'responsables2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usertype = Usertype::all();
        return view('responsable.create', compact('usertype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $user= User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'usertype_id' => $request->usertype_id,
            'password' =>Hash::make($request->password),
            'firma' => $request->firma,
            'puesto' => $request->puesto,

        ]);
       return redirect('responsable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsables=User::find($id);
        return view('responsable.update',compact('responsables'));
    }
    


    public function escribe($id)
    {
        $responsables=User::find($id);
        $responsables->status=0;
        $responsables->update();
        return redirect('responsable');
    }

    public function activar($id)
    {
        $responsables=User::find($id);
        $responsables->status=1;
        $responsables->update();
        return redirect('responsable');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $responsables= User::find($id);
        $responsables->password=Hash::make($request->input('contrasena'));
        // $responsables->puesto_resp=$request->input('puesto');
        // // $responsables->firma_resp=$request->input('firma');
        // $responsables->dpto_resp=$request->input('departamento');
        $responsables->update();
        return redirect('responsable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

    }
}
