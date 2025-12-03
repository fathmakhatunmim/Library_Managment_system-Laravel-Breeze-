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
           Schema::create('ReviewBook', function (Blueprint $table) {
           $table->id(); // primary key
            $table->string('Book Name');
            $table->string('ISBN / Edition');
            $table->string('Category');
            $table->string('Review');
            $table->timestamps(); // created_at এবং updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
