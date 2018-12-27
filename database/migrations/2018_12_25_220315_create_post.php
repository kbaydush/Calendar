<?php
declare(strict_types = 1);
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration
{

    public function up():void
    {
        Schema::create('posts', static function (Blueprint $table): void {
            $table->integer('userId');
            $table->integer('id');
            $table->string('title');
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
        Schema::table('posts', function (Blueprint $table) {
            Schema::dropIfExists('posts');
        });
    }
}
