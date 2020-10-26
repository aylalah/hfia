<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tables', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('other_names');
            $table->integer('age');
            $table->string('gender');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('date_of_birth');
            $table->string('password');
            $table->integer('user_category_id');
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
        Schema::dropIfExists('user_tables');
    }
}
