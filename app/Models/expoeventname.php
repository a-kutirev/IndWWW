<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idexpoeventname
 * @property string $expoeventname
 * @property string $expoeventtype
 * @property boolean $isdefault
 */
class expoeventname extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idexpoeventname';

    /**
     * @var array
     */
    protected $fillable = ['expoeventname', 'expoeventtype', 'isdefault'];

}
