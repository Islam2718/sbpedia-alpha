<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class People extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'email',];

    protected static function newFactory()
    {
        return \Modules\Profile\Database\factories\PeopleFactory::new();
    }
}
