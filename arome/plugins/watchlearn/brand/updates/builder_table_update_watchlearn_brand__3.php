<?php namespace Watchlearn\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnBrand3 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->dropColumn('button');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->boolean('button');
        });
    }
}
