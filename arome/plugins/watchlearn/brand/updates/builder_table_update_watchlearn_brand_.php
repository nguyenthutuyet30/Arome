<?php namespace Watchlearn\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnBrand extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->boolean('button')->nullable();
            $table->text('image')->default('null')->change();
            $table->dropColumn('name');
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->dropColumn('button');
            $table->text('image')->default('NULL')->change();
            $table->string('name', 191)->nullable()->default('NULL');
            $table->string('description', 191)->nullable()->default('NULL');
        });
    }
}
