<?php namespace Watchlearn\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnBrand2 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->text('image')->nullable(false)->default(null)->change();
            $table->boolean('button')->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->text('image')->nullable()->default('NULL')->change();
            $table->boolean('button')->nullable()->default(NULL)->change();
        });
    }
}
