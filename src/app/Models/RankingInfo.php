<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankingInfo extends Model
{
    use HasFactory;
    protected $table = 'ranking_info';
    protected $fillable = ['title', 'image_url'];
}
