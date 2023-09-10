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
        Schema::create('posts',function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');;
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('indexImage')->nullable();
            $table->string('category')->nullable()->default('بدون دسته بندی');
            $table->string('slug');
            $table->text('comment')->nullable();
            $table->string('created_at');
            $table->string('updated_at');
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
