<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wts', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->string('user_id')->nullable();
            $table->string('status')->nullable();
            $table->string('brand')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->string('size')->nullable();
            $table->string('condition')->nullable();
            $table->string('post')->nullable();
            $table->string('payed')->nullable();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wts');
    }
}
