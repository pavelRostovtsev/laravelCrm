<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_event');
            $table->string('price');
            $table->string('type_work');
            $table->integer('firm_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->date('date');
            $table->timestamps();
            $table->integer('change_id')->unsigned();

            $table->foreign('firm_id')
                ->references('id')
                ->on('firms');
            
            $table->foreign('employee_id')
                ->references('id_employee')
                ->on('employees');    

            $table->foreign('change_id')
                ->references('id')
                ->on('changes');
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
