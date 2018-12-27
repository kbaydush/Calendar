<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', static function (Blueprint $table): void {
            $table->increments('id');
            $table->timestamp('timestamp');
            $table->integer('userId');
            $table->string('event');
            $table->string('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendars', function (Blueprint $table) {
            Schema::dropIfExists('calendars');
        });
    }
}
