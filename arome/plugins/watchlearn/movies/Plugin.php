<?php namespace Watchlearn\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Slider Plugin',
            'description' => 'slider',
            'author' => 'Polina',
            'icon' => 'icon-leaf'
        ];
    }
    public function registerComponents()
    {
        return [
            'Watchlearn\Movies\Components\Movie' => 'Movie'
        ];
    }

    public function registerSettings()
    {
    }
}
