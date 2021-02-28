<?php namespace Watchlearn\Switchstatment\Models;

use Model;

/**
 * Model
 */
class Switchstatment extends Model
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
    public $table = 'watchlearn_switchstatment_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
