<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies15 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->text('description_color')->nullable();
            $table->text('description_size')->nullable();
            $table->text('name_color')->nullable();
            $table->text('name_size')->nullable();
            $table->text('sale_color')->nullable();
            $table->text('sale_size')->nullable();
            $table->boolean('btn1_status')->nullable()->default(0);
            $table->string('btn1_name')->nullable();
            $table->text('btn1_color')->nullable();
            $table->text('btn1_link')->nullable();
            $table->boolean('btn2_status')->nullable()->default(0);
            $table->string('btn2_name')->nullable();
            $table->text('btn2_color')->nullable();
            $table->text('btn2_link')->nullable();
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
            $table->dropColumn('description_color');
            $table->dropColumn('description_size');
            $table->dropColumn('name_color');
            $table->dropColumn('name_size');
            $table->dropColumn('sale_color');
            $table->dropColumn('sale_size');
            $table->dropColumn('btn1_status');
            $table->dropColumn('btn1_name');
            $table->dropColumn('btn1_color');
            $table->dropColumn('btn1_link');
            $table->dropColumn('btn2_status');
            $table->dropColumn('btn2_name');
            $table->dropColumn('btn2_color');
            $table->dropColumn('btn2_link');
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('image')->default('\'null\'')->change();
            $table->text('sale')->default('\'null\'')->change();
        });
    }
}
