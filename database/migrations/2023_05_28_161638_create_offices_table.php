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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default(false);
            ;
            $table->integer('id_branch')->unsigned();
            $table->foreign('id_branch')->references('id')
            ->on('branches')->onDelete('cascade');

            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')
            ->on('type_travels')->onDelete('cascade');

            $table->integer('id_star')->unsigned();
            $table->foreign('id_star')->references('id')
            ->on('stars')->onDelete('cascade');

            $table->longText('location');
            $table->string('image');
            $table->longText('discreption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
