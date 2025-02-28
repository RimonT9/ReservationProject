<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resource_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->index('resource_id', 'booking_resource_idx');
            $table->index('user_id', 'booking_user_idx');

            $table->foreign('resource_id', 'booking_resource_fk')->on('resources')->references('id');
            $table->foreign('user_id', 'booking_user_fk')->on('users')->references('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
