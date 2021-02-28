<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnMovies2 extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_movies_');
    }
}
