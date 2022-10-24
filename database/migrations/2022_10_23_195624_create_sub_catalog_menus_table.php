<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_catalog_menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("parent", 100);
            $table->string("sub_punct", 100);
            $table->integer("order");
            $table->string("title", 100);
            $table->string("link", 500);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_catalog_menus');
    }
};
