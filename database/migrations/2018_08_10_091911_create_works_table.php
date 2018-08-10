<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateWorksTable
 * Работы в портфолио
 * @author Aleksey Belchenkov <belchenkov.leha@mail.ru>
 */
class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('desc')->nullable();
            $table->string('img')->nullable();
            $table->string('github_link')->nullable();
            $table->string('preview_link')->nullable();
            $table->integer('category_id')->unsigned()->index();
            $table->tinyInteger('is_visible')->default(1)->index();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
