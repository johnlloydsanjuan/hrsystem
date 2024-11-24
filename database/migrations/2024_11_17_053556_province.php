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
        Schema::create('province', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('province_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};
