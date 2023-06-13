<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_Myprofile_Detail extends Model
{
    use HasFactory;

    protected $table = 'work_myprofile_details';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
      ];
}
