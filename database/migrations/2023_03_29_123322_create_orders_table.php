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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable()->comment("ID зарегистрированного пользователя");
            $table->string('name')->comment("Имя заказчика");
            $table->string('email')->comment("Почта заказчика");
            $table->string('phone')->comment("Телефон заказчика");
            $table->string('adress')->comment("Адрес заказчика");
            $table->text('comment')->comment("Комментарий к заказу");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
