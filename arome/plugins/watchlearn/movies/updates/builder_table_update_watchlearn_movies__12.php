<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies12 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->integer('product_id');
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->text('image')->default('null')->change();
            $table->dropColumn('offer_id');
            $table->dropColumn('id_product');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('product_id');
            $table->string('name', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('image')->default('\'null\'')->change();
            $table->integer('offer_id');
            $table->integer('id_product');
        });
    }
}
