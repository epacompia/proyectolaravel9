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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->string('image_url')->nullable();

            // para las llaves foraneas son tratadas asi
            //PRIMERA FORMA
            //Para la llave foranea de user_id
            $table->foreignId('user_id')
                    //->nullable()  //aqui le pongo nullable para poder usar el "set null"
                    ->constrained()  //este es como si agregara en reference y el on
                    //->onDelete('set null');  //esto es para que en lugar de user_id vaya null
                    ->onDelete('cascade');

            //Para la llave foranea de category_id
            $table->foreignId('category_id')
                    ->constrained()
                    ->onDelete('cascade');


            //SEGUNDA FORMA
            /*
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');  //EN CASO YO ELIMINE UN USUARIO PUES QUE ELIMINE TODO SU POST EN CASCADA YA QUE NO EXISTE
            */

            // para las llaves foraneas son tratadas asi
            /*
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');  //EN CASO YO ELIMINE UN USUARIO PUES QUE ELIMINE TODO SU POST EN CASCADA YA QUE NO EXISTE
            */


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
