<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $dat =json_decode( Storage::disk('portfolio')->get('portfolio.json'));
       $datas= Storage::json('portfolio.json');
     
      $profile=$datas['personal_info'];
     
      
      $experiences=$datas['experiences'];
     
        return view('pages.home-page',[
            'profile'=>$profile,
            'experiences'=>$experiences
        ]);
    }
}
