<?php
use Illuminate\Http\Request;

function bokhtiar(){
    return "bokasdfasdfasdfhtiar";
}


function imaasdasdge ($req){
    $image = array();
    if ($req->hasFile('image')) {
        foreach ($req->image as $key => $photo) {
            $path = $photo->store('uploads/product/photos');
            array_push($image, $path);
        }
        $product['image']=json_encode($image);
    }

}
