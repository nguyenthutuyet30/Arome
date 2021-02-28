<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies5 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dateTime('create_at')->nullable();
            $table->dateTime('update_at')->nullable();
            $table->text('description')->default('null')->change();
            $table->string('image', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('create_at');
            $table->dropColumn('update_at');
            $table->text('description')->default('NULL')->change();
            $table->string('image', 191)->default('\'null\'')->change();
        });
    }
}
