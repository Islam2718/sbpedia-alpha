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
            $table->string('user_type');
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('secret_question')->nullable();
            $table->text('write_answer')->nullable();
            $table->text('secret_question_answer')->nullable();
            $table->string('left_after_complete')->nullable();
            $table->timestamps('last_login')->nullable();
            $table->string('last_login_ip');
            $table->string('last_login_browser');
            $table->string('created_ip')->nullable();
            $table->tinyInteger('status')->default('0')->comments('0 = new, 1 = active, 2 = suspended');
            $table->text('old_data')->nullable();
            $table->bigInteger('user_group_id')->nullable();
            $table->bigInteger('user_sub_group_id')->nullable();
            $table->tinyInteger('is_old_database')->nullable();
            $table->string('created_ip')->nullable();
            $table->rememberToken();
            $table->timestamps(); // create_at, updated_at
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