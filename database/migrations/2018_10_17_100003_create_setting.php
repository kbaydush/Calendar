<?php

declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetting extends Migration
{
    public function up(): void
    {
        Schema::create('settings', static function (Blueprint $table): void {
            $table->increments('id');
            $table->string('name');
            $table->string('json');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
}
