<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idevent
 * @property int $idexpoeventname
 * @property int $idpositions
 * @property string $ideventtype
 * @property int $idtourtype
 * @property boolean $tourduration
 * @property string $begindate
 * @property string $enddate
 * @property boolean $ispersistent
 */
class eventschedule extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idevent';

    /**
     * @var array
     */
    protected $fillable = ['idexpoeventname', 'idpositions', 'ideventtype', 'idtourtype', 'tourduration', 'begindate', 'enddate', 'ispersistent'];

}
