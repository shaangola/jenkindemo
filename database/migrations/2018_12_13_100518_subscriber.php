<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subscriber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('subscribers', function (Blueprint $table) {
            $table->integer('id')->index()->increments('id')->primary();
            $table->string('email');
            $table->timestamp('created_at')->nullable();
        });
        DB::statement("ALTER TABLE `subscribers` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;");
        DB::statement("ALTER TABLE `subscribers` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;");
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
}
