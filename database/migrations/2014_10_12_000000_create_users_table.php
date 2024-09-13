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
            $table->string('name');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role');
            $table->rememberToken();
            $table->timestamps();
        });


        $users=User::create([
            'name'=>'doken',
            'telephone'=>'651726743',
            'email'=>'dokfongang34@gmail.com',
            'password'=>'dokenpro2024',
            'role'=>1,
        ]);
    }

   


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
