<?php namespace Watchlearn\Wishlist;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Wishlist',
            'description' => 'Wishlist plusgin',
            'author' => 'Polina',
            'icon' => 'icon-leaf'
        ];
    }
    public function registerComponents()
    {
        return [
            'Watchlearn\Wishlist\Components\Wishlist' => 'Movie'
        ];
    }

    public function registerSettings()
    {
    }
}
