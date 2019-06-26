<?php

namespace App\Http\Controllers;

use App\Image;
use Exception;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Image as ImageIntervention;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;




class ProductsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except([]);
    // }

    public function create()
    {

        $categories = Category::all();
        return view('seller.sell', compact('categories'));
        // return view('welcome',compact('products', 'categories'));
        // return $categories;

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric|digits_between:1,10',
            'location' => 'required',
            'description' => 'required',
            'category_id' => 'required',

        ]);

        //DB::transaction(function ($request) {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'location' => $request->location,
            'description' => $request->description,
            'user_id' => \Auth::id(),
            'category_id' => $request->category_id,

        ]);

        //  auth()->user()->products()->create()

        if ($request->hasFile('img')) {

            foreach ($request->file('img') as $image) {

                $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
                $destination_path =  public_path('/images');
                // dd($destination_path);

                $image = ImageIntervention::make($image->getRealPath());
                $image->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination_path.'/'. $imagename);

                $imgModel = new Image();
                $imgModel->product_id = $product->id;
                $imgModel->url = $imagename;
                $imgModel->save();

            }
        }
        // });

        return back();
    }
    public function displayProducts()
    {
        $products = Product::with('images')->paginate(50);
        $categories = Category::all();
        return view('welcome', compact('products', 'categories'));

    }
    public function displayImages(Product $product)
    {
        return view('seller.productview')->with('product', $product);

    }


    public function uploadAvatar(Request $request){




        if($request->hasFile('img')){

            if (!$request->file('img')->isValid()) {
                
                
                return redirect()->back()->with('msg','The picture is invalid!!');
             }else{
                 $image=Input::file('img');
                $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
                $destination_path =  public_path('/images/user');
                // dd($destination_path);

                $image = ImageIntervention::make($image->getRealPath());
                $image->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination_path.'/'. $imagename);

                $user=Auth::user();
                $user->avatar=$imagename;
                $user->save();


            }
          


        return redirect()->back()->with('msg','upload succesfull!!');
            }
            else{
                return back() ->with('msg','Please choose any image file');
            }


    }

    public function updateUserData(Request $request){
        $user=Auth::user();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->save();

        return redirect()->back();
        

    }

    
    public function displayCategoryProducts($cat){

        $products=Product::where('category_id',$cat)->get();
        return view('welcome')->with('products',$products)->with('categories',Category::all());

    }
    
    public function searchProduct(Request $request){

        $search = $request->search;
        $products=product::where('name','LIKE',"%{$search}%")->get();
        return view('welcome')->with('products',$products)->with('categories',Category::all());

    }

    public function deleteProduct(Product $product){

        try{
                $product->delete();
        }catch(Exception $e){


        }

        return redirect()->back();
    }
}
