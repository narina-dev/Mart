<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function upload(Request $request){

        if($request->hasFile('img')){
            $image_array = $request->file('img');

            $array_len = count($image_array);

            for($i=0; $i<$array_len;$i++){
                $image_ext = $image_array[$i]->getClientOriginalExtension();

                $new_image_name = rand(123456,999999).".".$image_ext;

                $destination_path = public_path('/images');

                $image_array[$i]->move($destination_path,$new_image_name);

                $image = new image;
                $image->image_name=$new_image_name;

                $image->save();
            }
        return redirect()->back()->with('msg','upload succesfull!!');
            }
            else{
                return back() ->with('msg','Please choose any image file');
            }
        }
        public function displayImages(){
            $images = image::all();
            return view('display',compact('images'));
        }
}
