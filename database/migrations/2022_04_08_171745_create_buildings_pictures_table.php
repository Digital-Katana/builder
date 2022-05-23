<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings_pictures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buildingID');
            $table->foreign('buildingID')->references('id')->on('buildings')->onUpdate('cascade')->onDelete('cascade');
            $table->string('imageName');
            $table->string('imageALT');
            $table->enum('type',['RENDER','BLUEPRINT']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings_pictures');
    }
};
