<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Carbon\Carbon;
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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type')->default("admin");
            $table->string('phone')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'phone' => '0000',
                'type' => 'super-admin',
                'password' => '4a7d1ed414474e4033ac29ccb8653d9b',
                "created_at" =>  Carbon::now()->toDateTimeString(),
                "updated_at" =>  Carbon::now()->toDateTimeString(),
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
        Schema::dropIfExists('users');
    }
}
