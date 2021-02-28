<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->string('image')->nullable();
            $table->text('description')->default('null')->change();
            $table->date('year')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('image');
            $table->text('description')->default('NULL')->change();
            $table->integer('year')->nullable()->unsigned(false)->default(NULL)->change();
        });
    }
}
