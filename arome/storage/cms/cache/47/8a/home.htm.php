<?php 
class Cms603862d7b01ac160874841_34ae68c244765d875902bfc6434ff04bClass extends Cms\Classes\PageCode
{
public function onStart(){
    $this['movies'] = Watchlearn\Movies\Models\Movie::all();
}
}
