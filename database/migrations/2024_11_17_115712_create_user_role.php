<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)->unique();
        });

        DB::table('user_role')->insert([
            ['code' => 'ADMIN'], ['code' => 'USER'], ['code' => 'WRITER'],
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->boolean('is_member');
            $table->foreign('role_id')->references('id')->on('user_role');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
