<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcontact
 * @property string $contactname
 * @property string $contactpost
 * @property string $contactphone
 */
class contact extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idcontact';

    /**
     * @var array
     */
    protected $fillable = ['contactname', 'contactpost', 'contactphone'];

}
