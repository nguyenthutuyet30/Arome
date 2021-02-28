<?php namespace Watchlearn\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnBrandPartnerstatus extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_brand_partnerstatus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_brand_partnerstatus');
    }
}
