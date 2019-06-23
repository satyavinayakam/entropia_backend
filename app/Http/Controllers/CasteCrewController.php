<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CasteCrews;
use App\Models\Movies;
use App\Transformers\CastCrewTransformer;

class CasteCrewController extends Controller
{
    public function index($movieId){
        $caste = CasteCrews::Where('movie_id', $movieId)->get();

        return $this->response->collection($caste, New CastCrewTransformer)->setStatusCode(200);
    }

    public function show(){}

    public function store(Request $request){
        $caste = new CasteCrews([
            'movie_id'      => $request->get('movie_id'),
            'member_id'      => $request->get('member_id')
            
        ]);

        $caste->save();
    }

    public function edit(){
        $caste = CasteCrews::find($id);
    }

    public function update(Request $request){
        $caste = CasteCrews::find($id);

        $caste->movie_id  = $request->get('movie_id');
        $caste->member_id = $request->get('member_id');

        $caste->save();
    }

    public function delete(){
        $caste = CasteCrews::find($id);
        $caste->delete();
    }
}
