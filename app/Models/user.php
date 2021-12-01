<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idusers
 * @property string $usersname
 * @property string $userspass
 * @property string $usersrole
 * @property string $userscomment
 * @property boolean $userInactive
 * @property string $login
 */
class user extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'idusers';

    /**
     * @var array
     */
    protected $fillable = ['usersname', 'userspass', 'usersrole', 'userscomment', 'userInactive', 'login'];

}
