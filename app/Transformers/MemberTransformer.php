<?php 

namespace App\Transformers;
use App\Models\Members;
use League\Fractal\TransformerAbstract;

class MemberTransformer extends TransformerAbstract{


   

    public function transform(Members $members) {
        return [
            'id' => $members->id,
            'type' => ($members->type_id === 1) ? 'Producer' : 'Actor',
            'name' => $members->member_name,
            'dob' => $members->dob,
            'bio' => $members->biodata
        ];
    }

   
   
}


?>