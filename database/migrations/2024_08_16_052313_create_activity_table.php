<?php

use App\Models\User;
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
        Schema::create('activity', function (Blueprint $table) {
            Schema::create('activities', function (Blueprint $table) {
                $table->id();
                $table->string('type');
                $table->text('description');
                $table->string('attachment_path')->nullable();
                $table->foreignIdFor(User::class);
                $table->timestamps();

            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
