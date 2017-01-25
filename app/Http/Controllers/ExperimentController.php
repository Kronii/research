<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Data;

class ExperimentController extends Controller
{

    public function ctrldivide()
    {
        return view('experiments.group_one.ctrldivide');
    }
    public function ctrl()
    {
        $id = Session::get('id');
        $data = Data::find(1)->where('id', $id)->first();
        $rand = $data->rand;
        return view('experiments.group_one.ctrl', compact('rand'));
    }
    public function ctrlinsert()
    {
        $bottlepicked = $_GET["bottle"];
        $id = Session::get('id');
        $data = Data::find(1)->where('id', $id)->update(["bottlepicked" => $bottlepicked]);
        return redirect('/ctrldivide');
    }
    public function ctrldivideinsert(Request $request)
    {      
        $bottle1 = $_POST['bottle1'];
        $bottle2 = $_POST['bottle2'];
        $bottle3 = $_POST['bottle3'];
        $bottle4 = $_POST['bottle4'];
        $bottle5 = $_POST['bottle5'];
        $bottle6 = $_POST['bottle6'];
        $bottle7 = $_POST['bottle7'];
        $id = Session::get('id'); 
        $data = Data::find(1)->where('id', $id)->update(["bottle1percentage" => $bottle1, "bottle2percentage" => $bottle2,"bottle3percentage" => $bottle3,"bottle4percentage" => $bottle4,"bottle5percentage" => $bottle5,"bottle6percentage" => $bottle6,"bottle7percentage" => $bottle7]);    
        return view('experiments.thankyou');
    }

    //one
    public function exp()
    {   
        $id = Session::get('id');
        $data = Data::find(1)->where('id', $id)->first();
        $rand = $data->rand;
        return view('experiments.group_one.exp', compact('rand'));
    }

    //two

    //four
    public function noncute()
    { 
        return view('experiments.group_two.noncute');
    }

    //five
    public function whimsicallycute()
    {
        
        return view('experiments.group_two.whimsicallycute');
    }

    //six
    public function kindschemacute()
    {
        return view('experiments.group_two.kindschemacute');
    }

    //seven
    public function brandone()
    {   
        return view('experiments.group_three.brandone');
    }
    //eight
    public function brandtwo()
    {
        return view('experiments.group_three.brandtwo');
    }
    //nine
    public function brandthree()
    {
        return view('experiments.group_three.brandthree');
    }

    public function poskus()
    {
    	return view('experiments.poskus');
    }
    public function cwskrinsert()
    {
    	$correct = $_GET['Correct'];
        $incorrect = $_GET['Incorrect'];
        $control = $_GET['Control'];
        $id = Session::get('id'); 
        $data = Data::find(1)->where('id', $id)->update(["Correct" => $correct, "Incorrect" => $incorrect,"Control" => $control]); 
    	return redirect('random');
    }
    public function random()
    {
        $rand = rand(1,9);

        $id = Session::get('id');
        $data = Data::find(1)->where('id', $id)->update(["rand" => $rand]);

    	if($rand==2)
    	{
            $rand = "one";
    		return view('experiments.group_one.instructions', compact("rand"));
    	}
    	else if($rand==1)
    	{  
            $rand = "two";
    		return view('experiments.group_one.ctrl', compact("rand"));
    	}
    	else if($rand==3)
    	{
            $rand = "three";
    		return view('experiments.group_one.instructions', compact("rand"));
    	}
        else if($rand==4)
        {
            $rand = "four";
            return view('experiments.group_two.instructions', compact("rand"));
        }
        else if($rand==5)
        {
            $rand = "five";
            return view('experiments.group_two.instructions', compact("rand"));
        }
        else if($rand==6)
        {
            $rand = "six";
            return view('experiments.group_two.instructions', compact("rand"));
        }
        else if($rand==7)
        {
            $rand = "seven";
            return view('experiments.group_three.instructions', compact("rand"));
        }
        else if($rand==8)
        {
            $rand = "eight";
            return view('experiments.group_three.instructions', compact("rand"));
        }
        else if($rand==9)
        {
            $rand = "nine";
            return view('experiments.group_three.instructions', compact("rand"));
        }
    	else
    	{
    		//this shouldnt happen
    		return ("ERROR V RANDOMIZACIJI, $rand = " . $rand);
    	}
    }
}
