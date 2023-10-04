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
        Schema::create('tugases', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("hari");
            $table->string("url1")->nullable(true);
            $table->string("url2")->nullable(true);
            $table->string("url3")->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugases');
    }
};
