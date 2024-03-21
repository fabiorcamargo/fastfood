<?php

namespace App\Livewire;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class HeadBanner extends Component
{

    public $setCity = false;

    // public function mount(){
    //     if(Cookie::get('city')){
    //         //dd(Cookie::get('city'));
    //     }else{
    //         $this->setCity = true;
    //     }
    // }


    public function render()
    {
       // $cep = (json_decode(Http::get('https://viacep.com.br/ws/84268000/json/')->body()));
        //dd($cep->localidade);
        //if(Cookie::get('city') == )
        //dd(Cookie::get('city'));
        //Cookie::queue('city',$cep->localidade, 30);
        //dd(session());
        return view('livewire.head-banner');
    }
}
