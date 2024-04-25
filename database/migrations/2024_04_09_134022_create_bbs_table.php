<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //NOTES Лучше избегать непонятных названий для таблиц, все должно максимально понятным
        Schema::create('bbs', function (Blueprint $table) {
            $table->id();
            //NOTES Как показывает практика н атакие поля сразу нужно вешать индекс
            //NOTES Мне кажется длинна маловата
            $table->string('title', 50);
            $table->text('content');
            //NOTES Как показывает практика н атакие поля сразу нужно вешать индекс
            //NOTES float такой тип флоат явно мал для цен в рублях, я бы пересмотрел размер поля +  нет валидации н размер поля, из-за этого 503 при сохранении в форме
            $table->float('price');
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade');
            $table->timestamps();
            $table->index('created_at');
            //NOTES На поле update_at я бы тоже сразу индекс повесил
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbs');
    }
};
