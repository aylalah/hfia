<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
            $table->string('location_address');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('image');
            $table->string('map');
            $table->string('status');
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
        Schema::dropIfExists('contacts');
    }
}
