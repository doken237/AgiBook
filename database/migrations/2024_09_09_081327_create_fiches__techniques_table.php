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
        Schema::create('fiches_techniques', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('titre');
            $table->string('description');
            $table->string('photo');
            $table->string('speculation_id');
            $table->float('prix');
            $table->boolean('etat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiches_techniques');
    }
};
