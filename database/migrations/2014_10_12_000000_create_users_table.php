<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('national_number')->unique();
            $table->string('certification')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('phone')->unique()->nullable();
            $table->text('notes')->nullable();
            $table->enum('user_type', ['admin', 'student'])->default('student');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('admin_password')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
}
