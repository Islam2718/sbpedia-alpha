<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['is_default'];
    
    protected static function newFactory()
    {
        return \Modules\Settings\Database\factories\LanguageFactory::new();
    }
}
