<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->foreignId('level_id')->constrained('m_level', 'level_id')->onDelete('cascade');
            $table->string('username', 20);
            $table->string('nama', 100);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('m_user');
    }
};
