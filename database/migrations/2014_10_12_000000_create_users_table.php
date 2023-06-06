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
            $table->string('person_id');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->text('secret_question');
            $table->text('write_answer');
            $table->text('secret_question_answer');
            $table->string('left_after_complete');
            $table->dateTime('last_login');
            $table->string('last_login_ip');
            $table->string('last_login_browser');
            $table->string('created_ip');
            $table->tinyInteger('status')->default('0')->comments('0 = new, 1 = active, 2 = suspended');
            $table->text('old_data');
            $table->bigInteger('user_group_id');
            $table->bigInteger('user_sub_group_id');
            $table->tinyInteger('is_old_database');
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