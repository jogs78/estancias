<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('apellido');
                $table->string('telefono');
                $table->enum('tipo_usuario', ['Jefe', 'Auxiliar','Externo','Prestador','Aspirante'])->default('Aspirante');;
                $table->string('email')->unique();
        //            $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('path')->default('user.png');
                $table->rememberToken();
                $table->timestamps();
                $table->string('numcontrol');
                $table->tinyInteger('activo')->default(1);	
                $table->tinyInteger('status')->default(0);	
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('users');
    }
}
