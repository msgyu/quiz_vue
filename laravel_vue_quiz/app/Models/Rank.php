<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Rank extends Model
{
    protected $fillable = [
        'user_id', 'percentage_correct_answer'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function insertScore(int $correctRatio)
    {
        $ranking = new Rank();
        $ranking->percentage_correct_answer = $correctRatio;
        $ranking->user_id = Auth::id();
        $ranking->save();
    }
}
