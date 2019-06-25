<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MyController extends Controller
{
    private $proizvodi = [
        ['id' => 1, 'ime' => 'tastatura', 'opis' => 'Odlicna tastatura.'],
        ['id' => 2, 'ime' => 'mis', 'opis' => 'Precizan mis.'],
        ['id' => 3, 'ime' => 'monitor', 'opis' => 'Monitor sa visokom rezolucijom.'],
        ['id' => 4, 'ime' => 'kuciste', 'opis' => 'Providno kuciste sa neonskim dodacima.'],
        ['id' => 5, 'ime' => 'graficka kartica', 'opis' => 'AMD Vega 2.'],
    ];

    public function saberi($broj1, $broj2 = 0)
    {
        $zbir = $broj1 + $broj2;
        return view(
            'rezultat',
            [
                'b1' => $broj1,
                'b2' => $broj2,
                'z' => $zbir
            ]
        );
    }

    public function sviProizvodi($mode, $show)
    {
        return view(
            'proizvodi',
            [
                'mode' => $mode,
                'show' => $show,
                'proizvodi' => $this->proizvodi,
            ]
        );
    }

    public function proizvod($id)
    {
        // komentari su za jednu iteraciju foreach petlji
        foreach ($this->proizvodi as $proizvod) {
            // $proizvod
            // ['id' => 1, 'ime' => 'tastatura', 'opis' => 'Odlicna tastatura.']
            foreach ($proizvod as $key => $value) {
                // $key      $value
                // 'id'      1
                // 'ime'     tastatura
                // 'opis'    Odlicna tastatura
                if ($key == 'id' && $value == $id) {
                    $nadjeniProizvod = $proizvod;
                    break;
                }
            }
        }

        // dd($nadjeniProizvod);

        return view(
            'proizvod',
            [
                'proizvod' => $nadjeniProizvod
            ]
        );
    }

    public function addPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->post_title;
        $post->content = $request->post_content;
        $post->save();
    }
}
