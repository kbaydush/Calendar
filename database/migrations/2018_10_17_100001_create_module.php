<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModule extends Migration
{
    public function up(): void
    {
        Schema::create('modules', static function (Blueprint $table): void {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('friendlyName')->unique();
            $table->string('databaseName')->unique();
            $table->boolean('isEnabled');
            $table->boolean('isActive');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
}
