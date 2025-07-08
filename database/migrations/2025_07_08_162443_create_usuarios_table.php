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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('email', 40);
            $table->string('password', 40);
            $table->string('role', 40);
            $table->smallInteger('balance');
            $table->timestamps();
            $table->comment('Cada usuario puede realizar n ordenes a lo largo del tiempo para actualizar esta tabla debes usar 
            Schema::table en otra migration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
