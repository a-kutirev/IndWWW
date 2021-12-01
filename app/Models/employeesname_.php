<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idemployeename
 * @property string $employeenamefullname
 * @property string $employeenameshortname
 * @property boolean $employeesnamedefault
 */
class employeesname_ extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employeesname';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idemployeename';

    /**
     * @var array
     */
    protected $fillable = ['employeenamefullname', 'employeenameshortname', 'employeesnamedefault'];

}
