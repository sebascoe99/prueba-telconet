<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::with('roleUser')->orderBy('create_date', 'asc')->get();
        return View::make('index')->with('usuarios', $usuarios);
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
        return response()->json([
            'status' => '200',
            'message' => $request->name,
        ]);

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'apellido' => 'required',
                'correo' => 'required',
                'contrasenia' => 'required|email',
                'repetir_contrasenia' => 'required',
            ],
            [
                'required' => 'El campo :attribute es requerido'
            ]);

            if($validator->fails()){
                return response()->json([
                    'message' => $validator->errors(),
                    'status' => $_ENV['CODE_STATUS_ERROR_CLIENT']
                ]);
            }
        }catch (\Exception $e){
                return response()->json([
                    'message' => $e->getMessage(),
                    'status' => $_ENV['CODE_STATUS_ERROR_CLIENT']
                ]);
        }

        $user = new User();
        $user->id_role = intval($request->id_role);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->user_document;
        $user->password_encrypt = Crypt::encryptString($request->password);
        //$user->user_status = $_ENV['STATUS_ON'];

        $user->save();
        if(isset($user->id_user)){
            return view('index', [
                'message' => 'Usuario creado exitosamente',
            ]);
            return response()->json([
                'message' => 'Usuario creado exitosamente',
                'status' => $_ENV['CODE_STATUS_OK']
            ]);
        }
        return response()->json([
            'message' => 'Ocurrio un error interno en el servidor',
            'status' => $_ENV['CODE_STATUS_SERVER_ERROR']
        ]);
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

    public function getAllCommentById($id)
    {
        $comentarios = User::with('comment')->where('id_user', $id)->get();

        return View::make('mostrar_comentarios')->with('comentarios', $comentarios);
    }


}
