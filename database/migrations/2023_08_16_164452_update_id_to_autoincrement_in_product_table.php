<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class UpdateIdToAutoincrementInProductTable extends Migration
{
    public function up()
    {
        // Utwórz nową kolumnę autoinkrementującą jako tymczasową
        Schema::table('product', function (Blueprint $table) {
            $table->bigIncrements('new_id');
        });

        // Przenieś istniejące dane do nowej kolumny
        $products = Product::get();
        foreach ($products as $product) {
            $product->new_id = $product->id;
            $product->save();
        }

        // Usuń istniejącą kolumnę 'id'
        Schema::table('product', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        // Zmień nazwę nowej kolumny na 'id'
        Schema::table('product', function (Blueprint $table) {
            $table->renameColumn('new_id', 'id');
        });
    }

    public function down()
    {
        // Revert the changes if needed
    }
}