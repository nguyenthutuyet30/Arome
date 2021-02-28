<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies14 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->boolean('status')->default(1);
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->text('image')->default('null')->change();
            $table->text('sale')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('status');
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('image')->default('\'null\'')->change();
            $table->text('sale')->default('\'null\'')->change();
        });
    }
}
