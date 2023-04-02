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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('name')->nullable()->comment("Имя заказчика")->change();
            $table->string('email')->nullable()->comment("Почта заказчика")->change();
            $table->string('adress')->nullable()->comment("Адрес заказчика")->change();
            $table->text('comment')->nullable()->comment("Комментарий к заказу")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
