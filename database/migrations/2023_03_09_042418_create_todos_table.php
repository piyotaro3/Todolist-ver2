<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**mys
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('todoname',20);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamp('created_at')->useCurrent()->nullable(); 
            $table->timestamp('updated_at')->useCurrent()->nullable();

            $table->foreign('user_id')->references('id')->on('Users');
            $table->foreign('tag_id')->references('id')->on('Tags');
        });
        
    }
       

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
