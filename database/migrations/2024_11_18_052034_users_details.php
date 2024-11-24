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
        Schema::create('users_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('position_id');
            $table->decimal('salary_rate', 8, 2);
            $table->enum('payment_type', ['monthly', 'hourly']);
            $table->string('username');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->date('birthday');
            $table->string('gender');
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('municipality');
            $table->text('address');
            $table->string('mobilenumber');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('province')->references('id')->on('province');
            $table->foreign('municipality')->references('id')->on('municipality');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_details');
    }
};
