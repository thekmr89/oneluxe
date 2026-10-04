<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('destinations')) {
            Schema::create('destinations', function (Blueprint $table) {
                $table->id();
                $table->string('destination_name')->nullable();
                $table->text('content_one')->nullable();
                $table->text('content_two')->nullable();
                $table->string('image_one')->nullable();
                $table->string('image_two')->nullable();
                $table->text('l_content')->nullable();
                $table->string('l_image')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('seo_tables')) {
            Schema::create('seo_tables', function (Blueprint $table) {
                $table->id();
                $table->string('page_name')->nullable();
                $table->text('keywords')->nullable();
                $table->string('tittle')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('testimonial')) {
            Schema::create('testimonial', function (Blueprint $table) {
                $table->id('recid');
                $table->string('name')->nullable();
                $table->string('title')->nullable();
                $table->string('company')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('inquiries')) {
            Schema::create('inquiries', function (Blueprint $table) {
                $table->id();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->text('message')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('subscriptions')) {
            Schema::create('subscriptions', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('page_sections')) {
            Schema::create('page_sections', function (Blueprint $table) {
                $table->id();
                $table->string('page_name')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('section_types')) {
            Schema::create('section_types', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_types');
        Schema::dropIfExists('page_sections');
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('testimonial');
        Schema::dropIfExists('seo_tables');
        Schema::dropIfExists('destinations');
    }
};
