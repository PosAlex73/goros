<?php namespace Portal\Taro\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCardsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('portal_taro_cards', function(Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description');
            $table->string('status', 128);
            $table->string('image_path');
            $table->unsignedBigInteger('set_id');
            $table->foreign('set_id')->references('id')->on('portal_taro_card_sets');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_taro_cards');
    }
};
