<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('items', function($table)
                {
                        $table->integer('id');
                        $table->string('name')->default('');
                        $table->integer('rarity');
                        $table->string('restriction_level')->default('');
                        $table->string('img')->default('');
                        $table->string('type_id')->default('');
                        $table->string('sub_type_id')->default('');
                        $table->integer('max_offer_unit_price');
                        $table->integer('min_sale_unit_price');
                        $table->integer('offer_availability');
                        $table->integer('sale_availability');
                        $table->integer('sale_price_change_last_hour');
                        $table->integer('offer_price_change_last_hour');
                        
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
        //
        Schema::drop('items');
    }
}
