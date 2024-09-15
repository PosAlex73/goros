<?php namespace Portal\Taro\Updates;

use Portal\Taro\enums\Statuses;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCardSetsTable Migration
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
        Schema::create('portal_taro_card_sets', function(Blueprint $table) {
            $table->id();
            $table->string('title', 512);
            $table->text('description');
            $table->string('status', 255)->default(Statuses::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('portal_taro_card_sets');
    }
};
