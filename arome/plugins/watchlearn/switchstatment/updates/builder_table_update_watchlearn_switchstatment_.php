<?php namespace Watchlearn\Switchstatment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnSwitchstatment extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_switchstatment_', function($table)
        {
            $table->string('name', 191)->nullable()->change();
            $table->text('images')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_switchstatment_', function($table)
        {
            $table->string('name', 191)->nullable(false)->change();
            $table->text('images')->default('NULL')->change();
        });
    }
}
