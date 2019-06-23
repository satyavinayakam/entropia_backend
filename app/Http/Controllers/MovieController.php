<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\MemberTypes;
use App\Models\Members;
use App\Models\Users;
use App\Transformers\MovieTransformer;

class MovieController extends Controller
{
    
    public function index(){
        $movies = Movies::paginate(15);

        return $this->response->paginator($movies, New MovieTransformer)->setStatusCode(200);
    }

    public function show($id){
        $movie = Movies::find($id);
        return $this->response->item($movie, New MovieTransformer)->setStatusCode(200);
    }

    public function store(Request $request){
        $movies = new Movies([
            'movie'         => $request->get('movie'),
            'release_date'  => $request->get('release_date'),
            'thumbnail'     => $request->get('thumbnail'),
            'trailer_url'   => $request->get('trailer_url'),
            'producer_id'   => $request->get('producer_id'),
            'description'   => $reqest->get('description')
        ]);

        $movies->save();
    }

    public function edit(){
        $movies = Movies:: find($id);
    }

    public function update(Request $reqest){
        $movies = Movies:: find($id);

        $movies->movie = $request->get('movie');
        $movies->release_date = $request->get('release_date');
        $movies->thumbnail = $request->get('thumbnail');
        $movies->trailer_url = $request->get('trailer_url');
        $movies->producer_id = $request->get('producer_id');
        $movies->description = $request->get('description');


        $movies->save();
    }

    public function delete(){}
}
