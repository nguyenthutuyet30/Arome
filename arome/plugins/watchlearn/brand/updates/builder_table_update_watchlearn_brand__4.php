<?php namespace Watchlearn\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnBrand4 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_brand_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
