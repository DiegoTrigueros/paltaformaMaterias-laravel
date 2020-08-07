<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'codigoUsuario' => ['required', 'string', 'max:8', 'unique:usuario'],
            'nombresUsuario' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'apellidosUsuario' => ['required', 'string', 'max:255'],
            'edadUsuario' => ['required', 'integer', 'min:1'],
            'telefonoUsuario' => ['required', 'string', 'max:9'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (request()->hasFile('imagenPerfil')) {
            //Get file name w/ extension
            $filenameWithExt = request()->file('imagenPerfil')->getClientOriginalName();
            
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get extension
            $extension = request()->file('imagenPerfil')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = request()->file('imagenPerfil')->storeAs('/public/imagenesPerfil',$fileNameToStore);

            //Resize image
            $thumbnailpath = public_path('storage/imagenesPerfil/'.$fileNameToStore);
            $img = Image::make($thumbnailpath)->resize(140, 140, function($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
        }else{
            $fileNameToStore = 'noimage.jpg';
            $path = request()->file('imagenPerfil')->storeAs('public/imagenesPerfil',$fileNameToStore);
        }
        $user = User::create([
            'codigoUsuario' => $data['codigoUsuario'],
            'nombresUsuario' => $data['nombresUsuario'],
            'password' => Hash::make($data['password']),
            'apellidosUsuario' => $data['apellidosUsuario'],
            'edadUsuario' => $data['edadUsuario'],
            'telefonoUsuario' => $data['telefonoUsuario'],
            'cargo' => 'Estudiante',
            'imagenPerfil' => $fileNameToStore,
        ]);
        
        return $user;
    }
}
