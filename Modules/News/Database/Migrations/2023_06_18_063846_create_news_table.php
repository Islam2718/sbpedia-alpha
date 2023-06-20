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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('person_id')->nullable();
            $table->bigInteger('language_id')->nullable();
            $table->bigInteger('parent_id')->nullable();

            $table->string('title')->nullable();
            $table->string('alias')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('name')->nullable();
            $table->text('content')->nullable();
            $table->text('featured_image')->nullable();

            $table->tinyInteger('is_organization_news')->nullable();
            $table->bigInteger('organization_id')->nullable();
            $table->string('organization_name')->nullable();

            $table->integer('country_id')->nullable();
            $table->string('country_name')->nullable();
            $table->string('city_name')->nullable();

            $table->tinyInteger('is_file')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_name')->nullable();

            $table->string('link_type')->nullable();
            $table->string('custom_link')->nullable();
            $table->tinyInteger('is_target_blank')->nullable();

            $table->tinyInteger('is_top_news')->nullable();
            $table->tinyInteger('is_featured')->nullable();

            $table->tinyInteger('order')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('approve_status')->nullable();

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
        Schema::dropIfExists('news');
    }
};
