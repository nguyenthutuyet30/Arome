<?php namespace Watchlearn\Switchstatment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnSwitchstatment extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_switchstatment_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('images')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_switchstatment_');
    }
}
