<?php namespace Watchlearn\Wishlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnWishlist3 extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_wishlist_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_wishlist_');
    }
}
