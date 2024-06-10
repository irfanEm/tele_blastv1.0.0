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
        Schema::create('broadcast_messages', function (Blueprint $table) {
            $table->integer('id')->nullable(false)->autoIncrement();
            $table->integer('id_pesan');
            $table->string('id_group');
            $table->timestamp('waktu')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at');

            $table->foreign('id_pesan')->references('id')->on('messages')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_group')->references('id')->on('groups')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broadcast_messages');
    }
};
