<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journals extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_sk',
        'title',
        'description',
        'img_upload',
        'attachment',
    ];
}
