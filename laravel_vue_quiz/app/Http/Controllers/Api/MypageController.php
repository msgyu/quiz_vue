<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rank;

class MypageController extends Controller
{
    public function index()
    {
        $myScore = Rank::select('percentage_correct_answer', 'created_at')
            ->where('user_id', '=', auth('api')->user()->id)
            ->orderby('created_at', 'asc')
            ->limit(100)
            ->get();

        $myScoreGraphData = [
            'percentage_correct_answer' => $myScore->pluck('percentage_correct_answer')->all(),
            'created_at' => $myScore->pluck('created_at')->all()
        ];

        return $myScoreGraphData;
    }
}
