<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('codes', function(Blueprint $table) {
            $table->increments('code_id');
            $table->timestamps();
            $table->string('code', 60);
            $table->integer('FK_user_id')->unsigned();
        });
    }

    public function down()
    {
        
    }
}
