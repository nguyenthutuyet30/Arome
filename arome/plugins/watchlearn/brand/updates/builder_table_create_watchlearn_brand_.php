<?php namespace Watchlearn\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnBrand extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_brand_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_brand_');
    }
}
