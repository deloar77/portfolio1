<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function show($id,$company){
      $datas= Storage::json('portfolio.json');
       $profile=$datas['personal_info'];
      $experiences=$datas['experiences'];
      foreach($experiences as $experience){
        if($experience['company']===$company){
           
            foreach($experience['projects'] as $project){
                
                if($project['id']==$id){
                    
                    return view('pages.project',['project'=>$project,'profile'=>$profile]);
                }
            }
        }
      }

        
      
    }
}
