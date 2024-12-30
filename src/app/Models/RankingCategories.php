<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankingCategories extends Model
{
    use HasFactory;
    protected $table = 'ranking_categories';
    protected $fillable = [
        'id',
        'ranking_categories_id',
        'rank_title'
    ];
}
