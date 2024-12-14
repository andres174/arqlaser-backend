<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
       return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|',
            'nombre'=>'required',
            'apellido'=>'required',
            ]);
            if ($validator->fails()) {
                $data=[
                    "message"=>"Error en validacion de datos",
                    "error"=> $validator->errors(),
                    "status"=>400
                ];
                return response()->json($data);
            }
            $type=2;
            $user= User::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'estado' => 1,
                'id_tipo_usuario' => $type,
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(
                [
                    'accesToken'=>$token,
                    'tokenType'=>'Bearer',
                    'typeUserId'=>$user->id_tipo_usuario,
                    'id'=>$user->id,
                    'userName'=>$user->nombre,
                    'email'=>$user->email,
                    'celular'=>$user->celular,
                    'message' => "Usuario registrado con exito"
                ],
                200
    
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request)
    {
        
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Credenciales inválidas'], 401);
        }
        
        $user = User::where('email', $request->email)->first();

        $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(
                [
                    'accesToken'=>$token,
                    'tokenType'=>'Bearer',
                    'typeUserId'=>$user->id_tipo_usuario,
                    'id'=>$user->id,
                    'userName'=>$user->nombre,
                    'email'=>$user->email,
                    'celular'=>$user->celular,
                    'message' => "Inicio de Sesion exitoso"
                ],
                200
    
            );
        
        
    }

}
