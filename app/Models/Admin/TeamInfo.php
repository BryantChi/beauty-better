<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TeamInfo
 * @package App\Models
 * @version April 10, 2024, 5:29 pm CST
 *
 * @property string $name
 * @property string $role
 * @property string $introduce
 * @property string $degree
 * @property string $expertise
 * @property string $certificate_license
 */
class TeamInfo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'team_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'role',
        'introduce',
        'degree',
        'expertise',
        'certificate_license'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role' => 'string',
        'introduce' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role' => 'nullable',
        'introduce' => 'nullable',
        'degree' => 'nullable',
        'expertise' => 'nullable',
        'certificate_license' => 'nullable'
    ];


}
