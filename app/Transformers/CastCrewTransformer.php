<?php 

namespace App\Transformers;
use App\Models\CasteCrews;
use League\Fractal\TransformerAbstract;


class CastCrewTransformer extends TransformerAbstract{


     protected $defaultIncludes = [
         'Members'
        
     ];

    
    public function transform(CasteCrews $castecrew) {
        return [
            'id' =>  $castecrew->id,
            'movieId' => $castecrew->movie_id,
            'memberId' => $castecrew->member_id
        ];
    }

    public function includeMembers(CasteCrews $castecrew) {
        $member = $castecrew->Members;
        return $this->collection($member, new MemberTransformer);
    }

   
}


?>