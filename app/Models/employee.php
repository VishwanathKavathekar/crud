<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table="employee";
    protected $fillable=['emp_name','emp_pos'];   // these attributes must be compulsoraliy put
}
