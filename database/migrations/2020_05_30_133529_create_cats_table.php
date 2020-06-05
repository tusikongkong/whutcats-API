<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('sterilization')->nullable()->comment('绝育情况');
            $table->string('deworming')->nullable()->comment('驱虫情况');
            $table->string('vaccine')->nullable()->comment('疫苗情况');
            $table->string('introduction')->nullable()->comment('介绍');
            $table->string('shortintro')->nullable()->comment('一句话介绍');
            $table->string('charactor')->nullable()->comment('性格');
            $table->string('show')->comment('毛色花纹');
            $table->string('campus')->comment('所在校区');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
