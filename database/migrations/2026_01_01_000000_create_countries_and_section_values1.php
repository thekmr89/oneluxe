<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('countries')) {
            Schema::create('countries', function (Blueprint $table) {
                $table->id();
                $table->string('country_name')->nullable();
                $table->boolean('status')->default(1);
                $table->string('defination')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('section_values1')) {
            Schema::create('section_values1', function (Blueprint $table) {
                $table->id();
                $table->string('section_type')->nullable();
                $table->bigInteger('page_section')->nullable();
                $table->longText('value')->nullable();
                $table->string('page_name')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('section_values1');
        Schema::dropIfExists('countries');
    }
};
