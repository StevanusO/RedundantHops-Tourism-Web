<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TouristAttraction;
use App\Models\User;
use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    public function display_review(Request $data){
        $tourist = TouristAttraction::find($data->tourist_attraction_id);
        $post = Post::select('tourist_attraction_id', 'review', 'user_id', 'id', 'time')->where('tourist_attraction_id', $data->tourist_attraction_id)->get();
        return view('detail', compact('tourist', 'post'));
    }

}
