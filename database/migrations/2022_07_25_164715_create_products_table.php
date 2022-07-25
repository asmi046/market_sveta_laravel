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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 400)->comment('Наименование');
            $table->float('price', 8, 2)->comment('Основная цена');
            $table->float('price_old', 8, 2)->comment('Цена до скидки');
            $table->string('manufacture_status', 30)->comment('Статус товара');
            $table->integer('insklad')->comment('На складе');
            $table->string('sku', 50)->comment('Артикул');
            $table->string('brand', 100)->comment('Бренд');
            $table->string('state', 100)->comment('Страна');
            $table->string('collection', 100)->comment('Коллекция');
            $table->string('style', 60)->comment('Стиль');
            $table->string('quote', 80)->comment('Цитата');
            $table->text('description')->comment('Описание');

            $table->string('cat1', 150)->comment('Категория 1');
            $table->string('cat2', 150)->comment('Категория 2');
            $table->string('cat3', 150)->comment('Категория 3');

            $table->string('img', 500)->comment('Основное изображение');

            $table->text('title_seo')->comment('SEO заголовок');
            $table->text('description_seo')->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
