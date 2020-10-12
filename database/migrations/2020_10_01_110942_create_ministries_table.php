<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('content_1');
            $table->string('content_2');
            $table->string('content_3');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
             $table->string('created_by');
             $table->timestamp('created_time');
             $table->string('updated_by');
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
        Schema::dropIfExists('ministries');
    }
}
