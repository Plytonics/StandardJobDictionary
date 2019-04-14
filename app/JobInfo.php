<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;

class JobInfo extends Model
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
      "title", "description", "skillreq", "skillreqpro"
    ];

    protected $table = 'jobinfo';

    public $timestamps = false;
}
