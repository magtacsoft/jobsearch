<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\vacancy;


class HomeController extends Controller
{

    public function home(){
        $page = [
            'title' => 'İş Elanları'
        ];
        $data = vacancy::all();
        return  view('front.jobs' , ['data' => $data, 'page' => $page]);
    }


    public function jobs(){
        $page = [
            'title' => 'İş Elanları'
        ];
        $data = vacancy::all();
      return  view('front.jobs' , ['data' => $data, 'page' => $page]);
    }
    public function about(){
        $data = Page::find(1);
        //dd($data);
        return view('front.about', ['data' => $data]);
    }
    public function forEmployers(){
        $data = Page::find(2);
        return view('front.foremployers' , ['data'=>$data]);

    }
    public function forjobseekers(){
        $data = Page::find(3);
        return view('front.forjobseekers' , ['data'=>$data]);

    }
    public function servicefee(){
        $data = Page::find(4);
        return view('front.servicefee' , ['data'=>$data]);

    }
    public function hr(){
        $data = Page::find(5);
        return view('front.hr' , ['data'=>$data]);

    }
    public function contactus(){
        $data = Page::find(6);
        return view('front.contactus' , ['data'=>$data]);

    }

    public function readVacancy(vacancy $id){
            $data = vacancy::find($id)->first();

            return view('front.readvacancy',['data'=>$data]);
    }


}
