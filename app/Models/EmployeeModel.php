<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table = 'employee';

    protected $fillable = [
    'branch_id',
    'name',
    'phone',
    'address',
    'city',
    'tag_id',
    'dob',
    'join_date',
    'expire_date',
    'occupation',
    'age',
    'sex',
    'image',
    'verify',
];

}
