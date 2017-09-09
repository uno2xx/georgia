<?php

namespace App\Http\Controllers;

use App\Http\Requests\FirstStepRequest;
use App\Http\Requests\StepTwoRequest;
use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	return view('payment.index');
    }

    public function stepOneStore(FirstStepRequest $request){
    	session($request->all());

    	return redirect()->route('stepTwo');
    }

    public function stepTwo(){
    	return view('payment.step-two');
    }

    public function stepTwoStore(StepTwoRequest $request){
    	$token = Stripe::tokens()->create([
    		'card'	=> [
    			'number'	=> $request->card_number,
    			'exp_month'	=> $request->month,
    			'exp_year'	=> $request->year,
    			'cvc'		=> $request->cvv
    		]
    	]);

    	if(isset($token['id'])){
    		echo 'success';
    	}
    }

}
