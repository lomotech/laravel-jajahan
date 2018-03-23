<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class XrefDistrict
 * @package App\Models
 */
class District extends Model
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
    public $table = 'xref_districts';
    public $fillable = [
        'name',
        'ddsa_code',
        'alpha_3',
        'xref_state_id',
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
        'ddsa_code' => 'string',
        'alpha_3' => 'string',
        'xref_state_id' => 'integer',
        'active_at' => 'date',
        'inactive_at' => 'date',
        'deleted_at' => 'datetime'
    ];

    /**
     * Relationship
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function subdistrict()
    {
        return $this->hasMany(Subdistrict::class);
    }
}
