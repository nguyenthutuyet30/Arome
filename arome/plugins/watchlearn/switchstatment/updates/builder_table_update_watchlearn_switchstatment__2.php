<?php namespace Watchlearn\Switchstatment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnSwitchstatment2 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_switchstatment_', function($table)
        {
            $table->boolean('button')->nullable();
            $table->string('name', 191)->default('null')->change();
            $table->text('images')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_switchstatment_', function($table)
        {
            $table->dropColumn('button');
            $table->string('name', 191)->default('NULL')->change();
            $table->text('images')->default('NULL')->change();
        });
    }
}
