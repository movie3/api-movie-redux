<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{

    public function addFav(Request $request)
    {
        $userId = $request->user_id;
        $movieId = $request->movie_id;
        $fave = Favourite::create([
            'user_id' => $userId,
            'movies_id' => $movieId
        ]);

        return response()->json($fave);
    }


    public function getFav(Request $request)
    {
        $userId = $request->user_id;
        $fav = Favourite::where('user_id', $userId)->get();
        return response()->json($fav);
    }


}
