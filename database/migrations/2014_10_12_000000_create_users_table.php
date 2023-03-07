<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            /* ESTE METODO HACE QUE LE ASIGNE UNA LLAVE PRIMARIA AL ID, tambien autoincrement y unsignedbiginteger, todo eso es resumido cuando uso $table->id();
            $table->unsignedBigInteger('id')
                    ->autoIncrement();
            $table->primary('id'); //aqui le asigno la llave primary
            */


            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
