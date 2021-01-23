<?php

namespace App\Models;

use AlexAlexandre\MappableModels\Traits\HasNestedAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class AbstractModel extends Model
{
    use HasNestedAttributes, SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [self::UPDATED_AT];

    /**
     * The nested's (relations)
     *
     * @var array
     */
    public $nested = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        self::CREATED_AT,
        self::UPDATED_AT,
        self::DELETED_AT,
        'pivot'
    ];
}
