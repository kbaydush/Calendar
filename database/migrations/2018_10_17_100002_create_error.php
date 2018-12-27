<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateError extends Migration
{
    public function up(): void
    {
        Schema::create('errors', static function (Blueprint $table): void {
            $table->increments('id');
            $table->unsignedInteger('idModule');
            $table->string('message');
            $table->boolean('isSent');
            $table->timestamp('createdAt');

            $table->foreign('idModule')->references('id')->on('modules');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('errors');
    }
}
