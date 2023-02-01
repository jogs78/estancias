<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Ejecute la semilla de Usurio de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => "Jorge Octavio",
            'apellido' => "Guzman Sanchez" ,
            'telefono' => "9611917915" ,
            'email' => "jorge.gs1@tuxtla.tecnm.mx" ,
            'password' => Hash::make("paso") ,
            'numcontrol' => 96270463 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Jefe"  ,
            
        ]);
        DB::table('users')->insert([
            'nombre' => "Rip",
            'apellido' => "Guzmán" ,
            'telefono' => "9611917915" ,
            'email' => "rip@tuxtla.tecnm.mx" ,
            'password' => Hash::make("paso") ,
            'numcontrol' => 96270463 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Auxiliar"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "SII",
            'apellido' => "Guzmán" ,
            'telefono' => "9611917915" ,
            'email' => "investigacion@tuxtla.tecnm.mx" ,
            'password' => Hash::make("paso") ,
            'numcontrol' => 96270463 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Auxiliar"  ,
        ]);
                
        DB::table('users')->insert([
            'nombre' => "Leonardo Daniel",
            'apellido' => "Guillen Cruz" ,
            'telefono' => "9191411088" ,
            'email' => "daniel@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador2",
            'apellido' => "Prestador2" ,
            'telefono' => "961774412" ,
            'email' => "prestador2@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador3",
            'apellido' => "Prestador3" ,
            'telefono' => "961774412" ,
            'email' => "prestador3@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador4",
            'apellido' => "Prestador4" ,
            'telefono' => "961774412" ,
            'email' => "prestador4@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador5",
            'apellido' => "Prestador5" ,
            'telefono' => "961774412" ,
            'email' => "prestador5@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador6",
            'apellido' => "Prestador6" ,
            'telefono' => "961774412" ,
            'email' => "prestador6@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador7",
            'apellido' => "Prestador7" ,
            'telefono' => "961774412" ,
            'email' => "prestador7@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);
        DB::table('users')->insert([
            'nombre' => "Prestador8",
            'apellido' => "Prestador8" ,
            'telefono' => "961774412" ,
            'email' => "prestador8@live.com" ,
            'password' =>  Hash::make("12345678") ,
            'numcontrol' => 182434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Prestador"  ,
        ]);


        DB::table('users')->insert([
            'nombre' => "Sein",
            'apellido' => "Ozuna" ,
            'telefono' => "9616674412" ,
            'email' => "sein@live.com" ,
            'password' => Hash::make("12345678") ,
            'numcontrol' => 172434520 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Externo"  ,
        ]);



        DB::table('users')->insert([
            'nombre' => "Luis",
            'apellido' => "Gomez Verde" ,
            'telefono' => "9612776642" ,
            'email' => "luia@live.com" ,
            'password' => Hash::make("mario1997") ,
            'numcontrol' => 15270720 ,
            'path' => 'user.png' ,
            'activo' => 1 ,
            'status' => 0 ,
            'tipo_usuario' => "Aspirante"  ,
        ]);
    
    }
}
