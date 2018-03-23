<?php

namespace Lomotech\LaravelJajahan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class XrefCountry
 * @package App\Models
 */
class Country extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public $table = 'countries';
    public $fillable = [
        'name',
        'ddsa_code',
        'alpha_2',
        'alpha_3',
        'olympic',
        'fifa',
        'currency_name',
        'currency_alpha',
        'currency_minor_decimal',
        'capital',
        'nationality',
        'latitude',
        'longitude',
        'active_at',
        'inactive_at'
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
        'ddsa_code' => 'string',
        'alpha_2' => 'string',
        'alpha_3' => 'string',
        'olympic' => 'string',
        'fifa' => 'string',
        'currency_name' => 'string',
        'currency_alpha' => 'string',
        'currency_minor_decimal' => 'boolean',
        'capital' => 'string',
        'nationality' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'active_at' => 'date',
        'inactive_at' => 'date',
        'deleted_at' => 'datetime'
    ];

    /**
     * Slug option setting
     * @return SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Relationship
     */
    public function xrefState()
    {
        return $this->hasMany(XrefState::class);
    }
}
