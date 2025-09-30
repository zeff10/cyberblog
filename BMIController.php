<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function calBMI(Request $req){
        $weight = $req->input('weight');
        $height = $req->input('height')/100;
        $bmi = $weight / ($height * $height);

        if($bmi <18.5){
            $result = "Under Weight";
            $image = "under.jpg";
        }
        elseif($bmi >=18.5 && $bmi <24.9){
            $result = "Healthy weight";
            $image = "healthy.jpg";
        }
        else{
            $result = "Overweight";
            $image = "over.png";
        }
        return view('result', compact('bmi', 'result', 'image'));
    }
}
