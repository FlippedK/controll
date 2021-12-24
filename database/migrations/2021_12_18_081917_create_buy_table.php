<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy', function (Blueprint $table) {
            $table->id();
            $table->string('Pokypatel_name')->comment('Имя покупателя');
            $table->text('pokypki')->comment('Товары');
            $table->integer('summa')->comment('Сумма покупки');
            $table->string('sposob_oplati')->comment('Способ оплаты');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy');
    }
}
