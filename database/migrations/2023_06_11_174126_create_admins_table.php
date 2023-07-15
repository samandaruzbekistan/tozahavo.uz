<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username')->default('admin');
            $table->string('password')->default('c3284d0f94606de1fd2af172aba15bf3');
            $table->timestamps();
        });

        // Add a line of information
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => md5(md5('admin')), // You can replace this with your desired password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
