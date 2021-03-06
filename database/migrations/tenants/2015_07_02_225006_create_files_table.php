<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('extension');
            $table->decimal('size');
            $table->string('path');
            $table->string('description');
            $table->timestamps('uploaded_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('files');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
