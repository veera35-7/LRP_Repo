<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_products_', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->text('description')->after('name');
            $table->decimal('price', 10, 2)->after('description');
            $table->integer('quantity')->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_products_', function (Blueprint $table) {
            $table->dropColumn(['name', 'description', 'price', 'quantity']);
        });
    }
}
