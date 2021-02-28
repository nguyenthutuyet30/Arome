<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWatchlearnMovies extends Migration
{
    public function up()
    {
        Schema::dropIfExists('watchlearn_movies_');
    }
    
    public function down()
    {
        Schema::create('watchlearn_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->text('description')->nullable()->default('NULL');
            $table->date('year');
            $table->string('image', 191)->nullable()->default('\'null\'');
            $table->dateTime('create_at')->nullable()->default('NULL');
            $table->dateTime('update_at')->nullable()->default('NULL');
        });
    }
}
