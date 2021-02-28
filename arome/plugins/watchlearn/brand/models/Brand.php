<?php namespace Watchlearn\Brand\Models;

use Model;

/**
 * Model
 */
class Brand extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_brand_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];
}