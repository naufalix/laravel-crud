<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id');
            $table->string('name',50);
            $table->string('username',50)->unique();
            $table->string('email',50)->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role',50);
            $table->string('photo',50)->nullable();
            $table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
