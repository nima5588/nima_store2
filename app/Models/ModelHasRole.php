<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHasRole extends Model
{
    protected  $fillable = ['role_id' , 'model_type' , 'model_id'];

    public function role()
    {
        return $this->belongsTo(Role::class)->first();
    }
}
