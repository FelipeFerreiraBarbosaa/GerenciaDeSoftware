<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->date('data_nascimento');
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
        });

        $password = Hash::make('admin');
        $date = date("Y-m-d");
        $datetime = Carbon::now();
        DB::statement("INSERT INTO users(username, password, name, surname, email, data_nascimento, created_at, updated_at, deleted_at, remember_token) VALUES('admin', '$password', 'Admin', 'Principal', 'admin@projeto.com', '$date', '$datetime', '$datetime', null, true)");
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
