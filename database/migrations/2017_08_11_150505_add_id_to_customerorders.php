<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdToCustomerorders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_orders', function(){
            $table->integer('customer_id');
            $table->integer('driver_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_orders', function(){
            $table->dropColumn('customer_id');
            $table->dropColumn('driver_id');
        });
    }
}
