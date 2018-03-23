<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class XrefSubdistrict
 * @package App\Models
 */
class Subdistrict extends Model
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
    public $table = 'xref_subdistricts';
    public $fillable = [
        'name',
        'ddsa_code',
        'level',
        'xref_district_id',
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
        'level' => 'boolean',
        'xref_district_id' => 'integer',
        'deleted_at' => 'datetime'
    ];

    /**
     * Relationship
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
