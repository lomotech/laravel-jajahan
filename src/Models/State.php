<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Lomotech\LaravelJajahan\Models\Country;

/**
 * Class XrefState
 * @package App\Models
 */
class State extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public $table = 'states';
    public $fillable = [
        'name',
        'name_long',
        'ddsa_code',
        'alpha_2',
        'alpha_3',
        'capital',
        'xref_country_id',
        'active_at',
        'inactive_at',
        'deleted_at'
    ];
    protected $dates = ['deleted_at'];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'name_long' => 'string',
        'ddsa_code' => 'string',
        'alpha_2' => 'string',
        'alpha_3' => 'string',
        'capital' => 'string',
        'xref_country_id' => 'integer',
        'active_at' => 'date',
        'inactive_at' => 'date',
        'deleted_at' => 'datetime'
    ];

    /**
     * Relationship
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
