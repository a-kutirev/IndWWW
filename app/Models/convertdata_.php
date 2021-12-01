<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idconvertdata
 * @property int $oldid
 * @property int $newid
 * @property string $tablename
 */
class convertdata_ extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'convertdata';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idconvertdata';

    /**
     * @var array
     */
    protected $fillable = ['oldid', 'newid', 'tablename'];

}
