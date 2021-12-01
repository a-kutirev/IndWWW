<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idposition
 * @property int $idreportfloor
 * @property string $positionname
 * @property boolean $position_default
 */
class position extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idposition';

    /**
     * @var array
     */
    protected $fillable = ['idreportfloor', 'positionname', 'position_default'];

}
