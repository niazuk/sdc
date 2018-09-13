<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contact_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('company',100);
            $table->string('email',100);
            $table->string('phone',100);
            $table->string('reference_no',100);
            $table->string('enquiries',1000)->default('Please contact me.');;
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
        Schema::drop('contactforms');
    }
}
