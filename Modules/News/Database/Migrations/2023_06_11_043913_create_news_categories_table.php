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
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->default(0)->nullable();
            $table->bigInteger('language_id');
            $table->string('language_alias')->nullable();
            $table->string('name');
            $table->string('alias');
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default('1')->comments('0 = In Active, 1 = Active');            
            $table->string('order')->nullable();
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
        Schema::dropIfExists('news_categories');
    }
};
