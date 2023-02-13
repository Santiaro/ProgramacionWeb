<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();       
            $table->String('name', 20);
            $table->String('lastname', 20);    
            $table->foreignId('document_type_id');
            $table->String('document', 10)->unique();
            $table->foreignId('residence_place');
            $table->date('birthdate');
            $table->String('email', 30)->unique();
            $table->String('phone', 10);
            $table->String('username', 10)->unique();
            $table->String('password', 15);
            $table->timestamps();
            $table->foreign('residence_place')->references('id')->on('cities');
            $table->foreign('document_type_id')->references('id')->on('document_types');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
