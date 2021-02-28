<?php namespace Watchlearn\Switchstatment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnSwitchstatment3 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_switchstatment_', function($table)
        {
            $table->string('name', 191)->nullable(false)->default(null)->change();
            $table->text('images')->default('null')->change();
            $table->dropColumn('button');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_switchstatment_', function($table)
        {
            $table->string('name', 191)->nullable()->default('\'null\'')->change();
            $table->text('images')->default('NULL')->change();
            $table->boolean('button')->nullable()->default(NULL);
        });
    }
}
