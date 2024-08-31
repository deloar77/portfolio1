<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowExperienceController extends Controller
{
   public function experiences(){

     $datas= Storage::json('portfolio.json');

      $experiences=$datas['experiences'];
      $profile=$datas['personal_info'];

     return view('pages.experience',[
        'experiences'=>$experiences,
        'profile'=>$profile
     ]);
   }
}
