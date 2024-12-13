<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function q1(){
        $annonce1=Annonce::findOrFail(1);
        return $annonce1;
    }

    public function q2(){
        $annonce2=Annonce::where('ville','Rabat');
        return $annonce2->get();
    }

    public function q3(){
        $annonce3=Annonce::where('titre','like','%R+2%')
                ->orWhere('description','like' , '%R+2%')->get();
        return $annonce3;
    }

    public function q4(){
        $annonce4=Annonce::where('type',['villa','maison'])->get();
        return $annonce4;
    }

    public function q5(){
        $annonce5 = Annonce::where('neuf', 'Non')->orWhere('prix', '<=', 400000)->get();
        return $annonce5;
    }

    public function q6(){
        $annonce6=Annonce::orderBy('created_at', 'desc')->first();
        return $annonce6;
    }

    public function q7(){
        $annonce7=Annonce::where('neuf', 'Oui')->whereBetween('superficie',['70m²','100m²']);
        return $annonce7;
    }

    public function q8(){
        $annonce8=Annonce::where('type', 'appartement')
        // ->where('transaction', 'vente')
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
        return $annonce8;
    }

    public function q9(){
        $annonce9 = Annonce::distinct('ville')->pluck('ville');
        return $annonce9;
    }

    public function q10(){
        $annonce10 = Annonce::where('type', 'appartement')->get();
        foreach ($annonce10 as $annonce) {
            $annonce->nouveau_prix = $annonce->prix * 0.05;
        }
        return $annonce10;
    }
}
