<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Rank;

class RankController extends Controller
{
    /**
     *
     *
     * @return
     */
    public function index()
    {
        $weekRank = Rank::with('user')
            ->select(DB::raw('MAX(ranks.percentage_correct_answer) as percentage_correct_answer, ranks.user_id, ranks.created_at'))
            ->whereBetween('ranks.created_at', [now()->startOfWeek()->format('Y-m-d'), now()->endOfWeek()->format('Y-m-d')])
            ->limit(5)
            ->orderby('percentage_correct_answer', 'desc')
            ->groupBy('ranks.user_id')
            ->get();

        $weekRankData = [
            'percentage_correct_answer' => $weekRank->pluck('percentage_correct_answer')->all(),
            'name' => $weekRank->pluck('user.name')->all()
        ];

        $monthRank = Rank::with('user')
            ->select(DB::raw('MAX(ranks.percentage_correct_answer) as percentage_correct_answer, ranks.user_id, ranks.created_at'))
            ->whereBetween('ranks.created_at', [now()->startOfMonth()->format('Y-m-d'), now()->endOfMonth()->format('Y-m-d')])
            ->limit(5)
            ->orderby('percentage_correct_answer', 'desc')
            ->groupBy('ranks.user_id')
            ->get();

        $monthRankData = [
            'percentage_correct_answer' => $monthRank->pluck('percentage_correct_answer')->all(),
            'name' => $monthRank->pluck('user.name')->all()
        ];

        $totalRank = Rank::with('user')
            ->select(DB::raw('MAX(ranks.percentage_correct_answer) as percentage_correct_answer, ranks.user_id, ranks.created_at'))
            ->limit(5)
            ->orderby('percentage_correct_answer', 'desc')
            ->groupBy('ranks.user_id')
            ->get();

        $totalRankData = [
            'percentage_correct_answer' => $totalRank->pluck('percentage_correct_answer')->all(),
            'name' => $totalRank->pluck('user.name')->all()
        ];


        return ['weekRankData' => $weekRankData, 'monthRankData' => $monthRankData, 'totalRankData' => $totalRankData];
    }
}
