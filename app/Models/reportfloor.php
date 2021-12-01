<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idreportfloor
 * @property string $reportfloorname
 * @property boolean $reportfloor_default
 */
class reportfloor extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idreportfloor';

    /**
     * @var array
     */
    protected $fillable = ['reportfloorname', 'reportfloor_default'];

}
