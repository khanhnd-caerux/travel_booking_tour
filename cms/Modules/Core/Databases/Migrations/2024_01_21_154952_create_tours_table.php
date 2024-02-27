<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('locale')->default('vi');
            $table->string('tour_code');
            $table->string('destination_from');
            $table->string('destination_to');
            $table->string('schedule');
            $table->longText('content');
            $table->string('feature_image_path')->nullable();
            $table->integer('category_id');
            $table->integer('status');
            $table->string('price');
            $table->string('vehicle');
            $table->string('discount_percent');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
