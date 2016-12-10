<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperimentController extends Controller
{
    public function ctrlone()
    {
    	return view('experiments.group_one.ctrlone');
    }
    public function expone()
    {
    	return view('experiments.group_one.expone');
    }
    public function ctrloneinsert()
    {
    	//insert v bazo?
    	return redirect('expone');
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
    	$rand = rand(1,3);
    	if($rand==1)
    	{
    		return view('experiments.group_one.ctrlone');
    	}
    	else if($rand==2)
    	{
            return ('$rand = ' . $rand . '. Druga  skupina še ni narejena' );
    		return view('experiments.group_two.ctrltwo');
    	}
    	else if($rand==3)
    	{
            return ('$rand = ' . $rand . '. Tretja  skupina še ni narejena' );
    		return view('experiments.group.three.ctrlthree');
    	}
    	else
    	{
    		//this shuldnt happen
    		return ("ERROR V RANDOMIZACIJI, $rand = " . $rand);
    	}
    }
}
