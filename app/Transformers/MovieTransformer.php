<?php 

namespace App\Transformers;
use App\Models\Movies;
use League\Fractal\TransformerAbstract;


class MovieTransformer extends TransformerAbstract{


    protected $defaultIncludes = [
        'Members'
        
    ];

    
    public function transform(Movies $movies) {
        return [
            'id' =>  $movies->id,
            'name' => $movies->movie,
            'releaseDate' => $movies->release_date,
            'thumbs' => $movies->thumbnail,
            'trailerUrl' => $movies->trailer_url,
            'description' => $movies->description
        ];
    }

    public function includeMembers(Movies $movies) {
        $member = $movies->Members;
        return $this->item($member, new MemberTransformer);
    }

   
}


?>