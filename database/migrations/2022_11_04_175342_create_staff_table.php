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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('gender',15);
            $table->date('dob');
            $table->string('phone',15)->nullable();
            $table->string('email',100)->nullable();
            $table->string('address',255)->nullable();
            // $table->string('position_id')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('description',200)->nullable();
            $table->text('image_path')->nullable();
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
        Schema::dropIfExists('staff');
    }
};
