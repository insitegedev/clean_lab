<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSaleColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropColumns('products','vip');
        Schema::dropColumns('products','sale');
        Schema::dropColumns('products','sale_price');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('vip')->default(false)->after('slug');
            $table->boolean('sale')->default(false);
            $table->bigInteger('sale_price')->nullable()->after('sale');
        });
    }
}
