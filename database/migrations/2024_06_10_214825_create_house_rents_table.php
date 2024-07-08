<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('house_rents', function (Blueprint $table) {
            $table->id();
            $table->date('posted_on');
            $table->integer('bhk');
            $table->integer('rent');
            $table->integer('size');
            $table->string('floor');
            $table->string('area_type');
            $table->string('area_locality');
            $table->string('city');
            $table->string('furnishing_status');
            $table->string('tenant_preferred');
            $table->integer('bathroom');
            $table->string('point_of_contact');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_rents');
    }
};
