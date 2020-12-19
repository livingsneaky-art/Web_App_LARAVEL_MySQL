<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Response;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class StoreImageController extends Controller
{
 
    public function myReserve(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = User::find($user_id)->images;

        return view('displayHotel')->with('data', $data);
    }

    function index()
    {
        $data = Images::latest()->paginate(5);
        return view('store_image', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    function insert_image(Request $request)
    {
        
        
        $request->validate([
        'user_name'  => 'required',
        'user_image' => 'required|image|max:2048',
        'user_id' => 'exists:missions,id'
        ]);

        $image_file = $request->user_image;
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));
            
        $form_data = array(
        'user_name'  => $request->user_name,
        'user_image' => $image,
        'user_id' => Auth::user()->id,
        );

        Images::create($form_data);    
    
        return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
        $image = Images::findOrFail($image_id);

        $image_file = Image::make($image->user_image);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    function display()
    {
        $data = Images::latest()->paginate(5);
        return view('displayHotel2', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function destroy(Request $request)
    {
        $hotel_id = $request->hotelid;
        $data = Images::find($hotel_id);
        $data->delete();

        return view('/home');
    }

    function update(Request $request)
    {
        $hotel_id = $request->hotelid;
        $data = Images::find($hotel_id);
        $data->user_name = $request->user_name;
    
        $data->save();

        return view('/home');
    }

    function destroy2(Request $request)
    {
        $hotel_id = $request->hotelid;
        $data = Images::find($hotel_id);
        $data->delete();

        return view('/adminHome');
    }

    function update2(Request $request)
    {
        $hotel_id = $request->hotelid;
        $data = Images::find($hotel_id);
        $data->user_name = $request->user_name;
    
        $data->save();

        return view('/adminHome');
    }  
}


