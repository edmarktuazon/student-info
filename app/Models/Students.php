<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Students extends Model
{
    protected $fillable = [
        'fName', 
        'mName', 
        'lName', 
        'addr', 
        'pBirth', 
        'bDate', 
        'sex', 
        'nation', 
        'email', 
        'cNum', 
        'lrn', 
        'gradelvl',
        'strand',
        'sYear',
        'lSchool',
        'lschoolAddr',
        'lSyear',
        'rCard',
        'gMoral',
        'bCert',
        'parent_name',
        'parent_addr',
        'parent_cnum',
        'imgurl',
        'pass', 
    ];
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $hidden = [
        'pass',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->pass;
    }
}
