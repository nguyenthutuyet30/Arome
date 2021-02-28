<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies13 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->text('sale')->nullable()->default('null');
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->text('image')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('sale');
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('image')->default('\'null\'')->change();
        });
    }
}
