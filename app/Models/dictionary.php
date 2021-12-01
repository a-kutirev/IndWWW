<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iddictionary
 * @property string $dictionaryname
 * @property string $dictionarytype
 * @property boolean $isdefaultvalue
 */
class dictionary extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'iddictionary';

    /**
     * @var array
     */
    protected $fillable = ['dictionaryname', 'dictionarytype', 'isdefaultvalue'];

}
