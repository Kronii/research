<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Data;

class ExperimentController extends Controller
{

    //one
    public function ctrlone()
    {
    	return view('experiments.group_one.ctrlone');
    }
    public function expone()
    {
    	return view('experiments.group_one.expone');
    }
    public function exponedecisions()
    {
        return view('experiments.group_one.exponedecisions');
    }
    public function ctrloneinsert()
    {
    	//insert v bazo?
    	return redirect('/ctrlonedivide');
    }
    public function ctrlonedivide()
    {
        return view('experiments.group_one.ctrlonedivide');
    }
    public function ctrlonedivideinsert(Request $request)
    {
        if ($request->ajax())
        {
            return "kebab";
        }
        //insert v bazo?
        return view('/thankyou');
    }

    //two
    public function ctrltwo()
    {
        return view('experiments.group_one.ctrltwo');
    }
    public function ctrltwoinsert()
    {
        $bottlepicked = $_GET["bottle"];
        $id = Session::get('id');
        $data = Data::find(1)->where('id', $id)->update(["bottlepicked" => $bottlepicked]);
        return redirect('/ctrltwodivide');
    }
    public function ctrltwodivide()
    {
        return view('experiments.group_one.ctrltwodivide');
    }
    public function ctrltwodivideinsert(Request $request)
    {
        return $request;
        return view('/thankyou');
    }

    //three
    public function ctrlthree()
    {
        return view('experiments.group_one.ctrlthree');
    }
    public function expthree()
    {
        return view('experiments.group_one.expthree');
    }
    public function expthreedecisions()
    {
        return view('experiments.group_one.expthreedecisions');
    }
    public function ctrlthreeinsert()
    {
        //insert v bazo?
        return redirect('/ctrlthreedivide');
    }
    public function ctrlthreedivide()
    {
        return view('experiments.group_one.ctrlthreedivide');
    }
    public function ctrlthreedivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }

    //four
    public function noncute()
    {
        
        return view('experiments.group_two.noncute');
    }
    public function ctrlfour()
    {
        return view('experiments.group_two.ctrlfour');
    }
    public function expfour()
    {
        return view('experiments.group_two.expfour');
    }
    public function expfourdecisions()
    {
        return view('experiments.group_two.expfourdecisions');
    }
    public function ctrlfourinsert()
    {
        //insert v bazo?
        return redirect('/ctrlfourdivide');
    }
    public function ctrlfourdivide()
    {
        return view('experiments.group_two.ctrlfourdivide');
    }
    public function ctrlfourdivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }

    //five
    public function whimsicallycute()
    {
        
        return view('experiments.group_two.whimsicallycute');
    }
    public function ctrlfive()
    {
        return view('experiments.group_two.ctrlfive');
    }
    public function expfive()
    {
        return view('experiments.group_two.expfive');
    }
    public function expfivedecisions()
    {
        return view('experiments.group_two.expfivedecisions');
    }
    public function ctrlfiveinsert()
    {
        //insert v bazo?
        return redirect('/ctrlfivedivide');
    }
    public function ctrlfivedivide()
    {
        return view('experiments.group_two.ctrlfivedivide');
    }
    public function ctrlfivedivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }

    //six
    public function kindschemacute()
    {
        
        return view('experiments.group_two.kindschemacute');
    }
    public function ctrlsix()
    {
        return view('experiments.group_two.ctrlsix');
    }
    public function expsix()
    {
        return view('experiments.group_two.expsix');
    }
    public function expsixdecisions()
    {
        return view('experiments.group_two.expsixdecisions');
    }
    public function ctrlsixinsert()
    {
        //insert v bazo?
        return redirect('/ctrlsixdivide');
    }
    public function ctrlsixdivide()
    {
        return view('experiments.group_two.ctrlsixdivide');
    }
    public function ctrlsixdivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }

    //seven
    public function brandone()
    {
        
        return view('experiments.group_three.brandone');
    }
    public function ctrlseven()
    {
        return view('experiments.group_three.ctrlseven');
    }
    public function expseven()
    {
        return view('experiments.group_three.expseven');
    }
    public function expsevendecisions()
    {
        return view('experiments.group_three.expsevendecisions');
    }
    public function ctrlseveninsert()
    {
        //insert v bazo?
        return redirect('/ctrlsevendivide');
    }
    public function ctrlsevendivide()
    {
        return view('experiments.group_three.ctrlsevendivide');
    }
    public function ctrlsevendivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }

    //eight
    public function brandtwo()
    {
        
        return view('experiments.group_three.brandtwo');
    }
    public function ctrleight()
    {
        return view('experiments.group_three.ctrleight');
    }
    public function expeight()
    {
        return view('experiments.group_three.expeight');
    }
    public function expeightdecisions()
    {
        return view('experiments.group_three.expeightdecisions');
    }
    public function ctrleightinsert()
    {
        //insert v bazo?
        return redirect('/ctrleightdivide');
    }
    public function ctrleightdivide()
    {
        return view('experiments.group_three.ctrleightdivide');
    }
    public function ctrleightdivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }

    //nine
    public function brandthree()
    {
        
        return view('experiments.group_three.brandthree');
    }
    public function ctrlnine()
    {
        return view('experiments.group_three.ctrlnine');
    }
    public function expnine()
    {
        return view('experiments.group_three.expnine');
    }
    public function expninedecisions()
    {
        return view('experiments.group_three.expninedecisions');
    }
    public function ctrlnineinsert()
    {
        //insert v bazo?
        return redirect('/ctrlninedivide');
    }
    public function ctrlninedivide()
    {
        return view('experiments.group_three.ctrlninedivide');
    }
    public function ctrlninedivideinsert()
    {
        //insert v bazo?
        return view('/thankyou');
    }




    public function poskus()
    {
    	return view('experiments.poskus');
    }
    public function cwskrinsert()
    {
    	//insert v bazo : Color Word Stroop with Keyboard Responding 
    	return redirect('random');
    }
    public function random()
    {
        $rand = 1; //rand(1,9);

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
    		return view('experiments.group_one.ctrltwo', compact("rand"));
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
