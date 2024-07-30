<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('category_name')->nullable(); 
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('category_name'); 
    });
}

};
