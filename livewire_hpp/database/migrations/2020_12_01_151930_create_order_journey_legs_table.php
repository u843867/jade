<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderJourneyLegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_journey_legs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legNumber');
            $table->string('originLocationName');
            $table->string('originLocationCode');
            $table->string('destinationLocationName');
            $table->string('destinationLocationCode');
            $table->date('departureDate');
            $table->time('departureTime',0);
            $table->date('arrivalDate');
            $table->time('arrivalTime',0);
            $table->time('duration',0);
            $table->string('equipmentType');
            $table->string('equipmentMake');
            $table->string('equipmentName');
            // $table->foreignId('order_id')->constrained();
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
        Schema::dropIfExists('order_journey_legs');
    }
}
