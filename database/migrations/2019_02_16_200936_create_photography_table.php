<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreatePhotographyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('photography',function(Blueprint $table){
            $table->increments("id");
            $table->string("photo");
            $table->string("en_text");
            $table->string("ar_text");
            $table->integer("settings_id")->references("id")->on("settings");
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
        Schema::drop('photography');
    }

}