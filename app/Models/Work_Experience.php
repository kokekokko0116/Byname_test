<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_Experience extends Model
{
    use HasFactory;

    protected $table = 'work_experiences';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
      ];
}
