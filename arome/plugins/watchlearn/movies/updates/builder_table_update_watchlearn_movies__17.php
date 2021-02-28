<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies17 extends Migration
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
            $table->text('description_size')->default('null')->change();
            $table->text('name_color')->default('null')->change();
            $table->text('name_size')->default('null')->change();
            $table->text('sale_color')->default('null')->change();
            $table->text('sale_size')->default('null')->change();
            $table->string('btn1_name', 191)->default('null')->change();
            $table->text('btn1_color')->default('null')->change();
            $table->string('btn2_name', 191)->default('null')->change();
            $table->text('btn2_color')->default('null')->change();
            $table->text('btn2_link')->default('null')->change();
            $table->dropColumn('btn1_link');
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
            $table->string('btn1_name', 191)->default('\'null\'')->change();
            $table->text('btn1_color')->default('NULL')->change();
            $table->string('btn2_name', 191)->default('\'null\'')->change();
            $table->text('btn2_color')->default('NULL')->change();
            $table->text('btn2_link')->default('NULL')->change();
            $table->text('btn1_link')->nullable()->default('NULL');
        });
    }
}
