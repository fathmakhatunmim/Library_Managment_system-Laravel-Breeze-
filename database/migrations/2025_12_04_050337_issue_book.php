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
          Schema::create('IssueBook', function (Blueprint $table) {
           $table->id(); // primary key
            $table->string('name');
            $table->string('bookname');
            $table->string('Issuedate');
            $table->string('Returndate');
           $table->integer('quantity')->default(1);
            $table->timestamps(); // created_at এবং updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('IssueBook');
    }
};
