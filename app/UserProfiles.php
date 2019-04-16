<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;

class UserProfiles extends Model
{
  public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Str::uuid();
        });
    }

    protected $fillable = [
      "firstname", "lastname", "skill", "skillpro"
    ];

    protected $table = 'userprofiles';

    public $timestamps = false;
}
