<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idemplyeepost
 * @property int $idemployee
 * @property int $idpost
 * @property string $operationdate
 * @property int $idoperation
 * @property boolean $additionalguid
 */
class employeepost extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idemplyeepost';

    /**
     * @var array
     */
    protected $fillable = ['idemployee', 'idpost', 'operationdate', 'idoperation', 'additionalguid'];

}
