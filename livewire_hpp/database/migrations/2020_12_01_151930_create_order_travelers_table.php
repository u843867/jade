<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_travelers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('travelerNumber');
            $table->string('travelerType');
            $table->string('travelerTitle');
            $table->string('travelerFirstName');
            $table->string('travelerLastName');
            $table->integer('travelerBirthDay');
            $table->integer('travelerBirthMonth');
            $table->integer('travelerBirthYear');
            $table->string('travelerDocsType');
            $table->string('travelerDocsNumber');
            $table->integer('travelerDocsDay');
            $table->integer('travelerDocsMonth');
            $table->integer('travelerDocsYear');
            // $table->foreignId('order_id')->constrained('orders');
            $table->timestamps();
            $table->unsignedBigInteger('order_id');

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
                        
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_travelers');
    }
}
