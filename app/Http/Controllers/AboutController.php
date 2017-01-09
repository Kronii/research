<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;

use Session;

class AboutController extends Controller
{
    public function index()
    {
    	return view('about');
    }
    public function iagree()
    {
    	return redirect('about');
    }
    public function aboutinsert()
    {
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $education = $_POST["education"];
        $ethnicity = $_POST["ethnicity"];
        $employment = $_POST["employment"];
        $lang = $_POST["lang"];
        $rand = rand(1,6000000);

        $data = new Data();
        $data->age = $age;
        $data->gender = $gender;
        $data->education = $education;
        $data->ethnicity = $ethnicity;
        $data->employment = $employment;
        $data->lang = $lang;
        $data->rand = $rand;

        $data->save();

        $id=Data::where('age', $age)->where('gender', $gender)->where('education', $education)->where('ethnicity', $ethnicity)->where('employment', $employment)->where('rand', $rand)->first();
        $id = $id->id;
        Session::put('id', $id);

    	return redirect('poskus');
    }
}
