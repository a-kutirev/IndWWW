<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idnote
 * @property string $notestartperiod
 * @property string $noteendperiod
 * @property string $note
 * @property boolean $notelimit
 */
class note extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idnote';

    /**
     * @var array
     */
    protected $fillable = ['notestartperiod', 'noteendperiod', 'note', 'notelimit'];

}
