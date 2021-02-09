<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = "roles";
    protected $primaryKey = "id_role";

    public function users() {
        return $this->hasMany('App\User', 'id_role', 'id_role');
    }
}
