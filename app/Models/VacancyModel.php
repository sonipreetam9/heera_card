<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyModel extends Model
{
    use HasFactory;

    protected $table = 'vacancy';

    protected $fillable = [
        'vacancy_number',
        'post_date',
        'last_date',
        'category',
        'post',
        'application_fee_gen',
        'application_fee_oth',
        'file',
        'qualifications',
        'status',
        'description',
        'location',
        'salary_range',
        'created_at',
        'updated_at',
    ];

}
