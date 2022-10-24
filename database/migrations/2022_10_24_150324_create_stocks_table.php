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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("slug", 300)->comment('Слаг');
            $table->string("title", 300)->comment('Заголовок');
            $table->string("link", 500)->comment('Внешняя ссылка');
            $table->string("img", 300)->comment('Обложка акции');
            $table->string("end_data", 100)->comment('Дата окончания');

            $table->text("description")->comment('Описание акции');

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
        Schema::dropIfExists('stocks');
    }
};
