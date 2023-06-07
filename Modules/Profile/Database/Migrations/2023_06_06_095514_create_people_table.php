<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('signup_category_id');
            $table->integer('signup_sub_category_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('sur_name');
            $table->string('email');
            $table->string('identity');
            $table->string('gender');
            $table->string('organization_name');
            $table->bigInteger('organization_id');

            $table->date('dob');
            $table->string('profile_image');
            $table->string('cover_image');
            $table->string('online_profile');

            $table->text('interested_in');
            $table->text('about_myself');

            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('google');

            $table->tinyInteger('is_organization_root_user');
            $table->integer('status');
            $table->timestamps(); //created-at, updated-at 

             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};