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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('material', 60)->comment('Материал')->unique();
            $table->string('slug', 150)->comment('Псевдоним для ссылки');

            $table->string('title', 150)->comment('Заголовок страницы');
            $table->string('title_seo', 100)->comment('SEO заголовок');
            $table->string('description_seo', 300)->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
};
