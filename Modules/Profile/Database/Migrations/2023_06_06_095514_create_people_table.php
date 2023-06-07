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
            $table->integer('signup_category_id')->nullable();
            $table->integer('signup_sub_category_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('sur_name')->nullable();
            $table->string('email');
            $table->string('identity')->nullable();
            $table->string('gender')->nullable();
            $table->string('organization_name')->nullable();
            $table->bigInteger('organization_id')->nullable();

            $table->date('dob')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('online_profile')->nullable();

            $table->text('interested_in')->nullable();
            $table->text('about_myself')->nullable();

            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();

            $table->tinyInteger('is_organization_root_user')->default(0);
            $table->integer('status')->default(0);
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
