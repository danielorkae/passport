<?php

namespace Laravel\Passport;

use Webpatser\Uuid;

trait UuidAsPrimaryKey
{
    public $incrementing = false;

    protected $keyType = 'string';

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->id = (string) Uuid::generate(4);
        });
    }
}
