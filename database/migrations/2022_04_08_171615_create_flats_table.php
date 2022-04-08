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
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('floorID');
            $table->foreign('floorID')->references('id')->on('floors')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('flatNumber');
            $table->unsignedBigInteger('typeID');
            $table->foreign('typeID')->references('id')->on('flat_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->integer('liveableSQM');
            $table->integer('balconySQM');
            $table->integer('sumSQM');
            $table->integer('sqPrice');
            $table->integer('roomCount');
            $table->enum('compassDirection',['NORTH','EAST','SOUTH','WEST']);
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
        Schema::dropIfExists('flats');
    }
};
