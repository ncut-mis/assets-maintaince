<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Assets', function (Blueprint $table) {
            $table->increments('a_id');
            $table->string('name',50);
            $table->integer('category');
            $table->date('date')->nullable();
            $table->integer('cost')->nullable();
            $table->string('staues',20);
            $table->integer('keeper');
            $table->boolean('lendable');
            $table->string('location',50);
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('Assets');
    }
}
