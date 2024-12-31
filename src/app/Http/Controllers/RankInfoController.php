<?php

namespace App\Http\Controllers;

use App\Models\RankInfo;
use App\Models\RankingCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RankInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, string $rank_id)
    {
        if (!is_numeric($rank_id)) {
            return response()->json(['error_info' => 'rank_id must be a number'], 400);
        }
        // TODO: maybe it's better to use a constant instead of using a string for the column names
        // TODO: maybe it's better to use get() instead of first()?
        $ranking_categories = RankingCategories::where('ranking_categories_id', $rank_id)->first();

        if (!$ranking_categories) {
            return response()->json(['error_info' => 'ranking category not found'], 404);
        }
        $rank_info = RankInfo::where('ranking_categories_id', $rank_id)
            ->select('rank_number', 'title', 'image_url')
            ->get();
        if (!$rank_info) {
            return response()->json(['error_info' => 'no rank info found'], 404);
        }
        // TODO: もっと適切なログ出力方法は募集中
        Log::info('rank_info data:', ['rank_info' => $rank_info]);
        $ranking_categories['rank_info'] = $rank_info;
        return response()->json($ranking_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
