<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idtour
 * @property int $idevent
 * @property string $tourdate
 * @property string $tourtime
 * @property string $idguids
 * @property string $tourgroupage
 * @property string $tourgroupamount
 * @property int $touraddition
 * @property int $tourflag
 * @property int $idcategory
 * @property string $tourcomment
 * @property string $tourdeletereason
 * @property string $linkpair
 * @property int $tournumgroup
 * @property string $viscontacts
 * @property int $idorg
 * @property int $idgeo
 * @property string $idcontacts_str
 * @property boolean $outdoor
 */
class tour extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idtour';

    /**
     * @var array
     */
    protected $fillable = ['idevent', 'tourdate', 'tourtime', 'idguids', 'tourgroupage', 'tourgroupamount', 'touraddition', 'tourflag', 'idcategory', 'tourcomment', 'tourdeletereason', 'linkpair', 'tournumgroup', 'viscontacts', 'idorg', 'idgeo', 'idcontacts_str', 'outdoor'];

}
