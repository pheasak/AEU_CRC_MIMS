<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch_leadership_memberroster extends Model
{
    protected $connection = "mysql";
    protected $table = "branch_leadership_memberroster";
    protected $primaryKey = "blsmr_id";
}
