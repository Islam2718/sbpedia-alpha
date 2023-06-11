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
            $table->string('parent_id')->nullable();
            $table->string('alias');
            $table->tinyInteger('status')->default('0')->comments('0 = new, 1 = active, 2 = suspended');            
            $table->string('is_default')->default(0);
            $table->string('order');
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
