<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineEventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('timeline_events', function(Blueprint $table) {
            $table->integer('site_id')->unsigned();
            $table->foreign('site_id')->references('id')->on('sites');

            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')->unsigned()->nullable();

            $table->string('controller');
            $table->string('route');
            
            $table->integer('target_id')->unsigned()->nullable();
            $table->integer('parameter_id')->unsigned()->nullable();
            
            $table->string('parameter_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('timeline_events');
    }

}
