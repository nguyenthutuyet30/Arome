<?php namespace Watchlearn\Wishlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWatchlearnWishlist2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('watchlearn_wishlist_');
    }
    
    public function down()
    {
        Schema::create('watchlearn_wishlist_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->smallInteger('product_id');
        });
    }
}
