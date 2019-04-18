<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->enum('type',['superadmin','admin'])->default('admin');
            $table->enum('status',['active','inactive']);
            $table->timestamps();
        });

        DB::table('admins')->insert(
            array(
                'name' => 'Sayedul Sayem',
                'email' => 'sayedulsayemofficial@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '01515219181',
                'type' => 'superadmin',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            )
        );

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


}
