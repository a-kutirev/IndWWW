<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iddayoption
 * @property string $dayoptiondate
 * @property int $dayoptionflag
 * @property string $dayoptionaddguids
 */
class dayoption extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'iddayoption';

    /**
     * @var array
     */
    protected $fillable = ['dayoptiondate', 'dayoptionflag', 'dayoptionaddguids'];

}
