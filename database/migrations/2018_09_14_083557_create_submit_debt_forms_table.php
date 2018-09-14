<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitDebtFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_debt_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->date('due_date')->nullable();
            $table->string('debt_type',100)->nullable();
            $table->double('amount', 8, 2)->nullable();
            $table->string('stage',100)->nullable();  
            $table->string('details',1000)->nullable();
            $table->string('c_name',100)->nullable();
            $table->string('c_company',100)->nullable();
            $table->string('c_email',100)->nullable();
            $table->string('c_phone',100)->nullable();  
            $table->string('d_name',100)->nullable();
            $table->string('d_company',100)->nullable();
            $table->string('d_email',100)->nullable();
            $table->string('d_phone',100)->nullable();                        
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
        Schema::dropIfExists('submit_debt_forms');
    }
}
