<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankingPost extends Model
{
    use HasFactory;
    protected $table = 'ranking_posts';
    protected $fillable = [
        'title',
        'author'
    ];
    // TODO: Need to check how this works exactly
    public function rankingInfos()
    {
        return $this->hasMany(RankingInfo::class);
    }
}
