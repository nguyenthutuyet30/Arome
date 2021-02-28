<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies16 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->text('image')->default('null')->change();
            $table->text('sale')->default('null')->change();
            $table->text('description_color')->default('null')->change();
            $table->text('description_size')->default('25')->change();
            $table->text('name_color')->default('#006eab')->change();
            $table->text('name_size')->default('30')->change();
            $table->text('sale_color')->default('#006eab')->change();
            $table->text('sale_size')->default('60')->change();
            $table->string('btn1_name', 191)->default('null')->change();
            $table->text('btn1_color')->default('null')->change();
            $table->text('btn1_link')->default('null')->change();
            $table->string('btn2_name', 191)->default('null')->change();
            $table->text('btn2_color')->default('null')->change();
            $table->text('btn2_link')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('image')->default('\'null\'')->change();
            $table->text('sale')->default('\'null\'')->change();
            $table->text('description_color')->default('NULL')->change();
            $table->text('description_size')->default('NULL')->change();
            $table->text('name_color')->default('NULL')->change();
            $table->text('name_size')->default('NULL')->change();
            $table->text('sale_color')->default('NULL')->change();
            $table->text('sale_size')->default('NULL')->change();
            $table->string('btn1_name', 191)->default('NULL')->change();
            $table->text('btn1_color')->default('NULL')->change();
            $table->text('btn1_link')->default('NULL')->change();
            $table->string('btn2_name', 191)->default('NULL')->change();
            $table->text('btn2_color')->default('NULL')->change();
            $table->text('btn2_link')->default('NULL')->change();
        });
    }
}
