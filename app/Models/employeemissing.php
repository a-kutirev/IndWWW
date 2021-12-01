<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idemployeemissing
 * @property int $idemployeename
 * @property int $employeemissingflag
 * @property string $employeemissingbegin
 * @property string $employeemissingend
 * @property string $employeemissingcomment
 */
class employeemissing extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idemployeemissing';

    /**
     * @var array
     */
    protected $fillable = ['idemployeename', 'employeemissingflag', 'employeemissingbegin', 'employeemissingend', 'employeemissingcomment'];

}
