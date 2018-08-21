<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB; //classe usada para trabalhar com banco dados

/*Outra regra importante
é que todo controller do Laravel deve herdar de uma classe chamada
Controller, que foi criada automaticamente junto com nosso projeto.
Para isso, só precisamos adicionar extends Controller na declaração
da nossa classe,
*/

class ProdutoController extends Controller {

    public function lista(){
        
        $html = '<h1>Listagem de produtos com Laravel</h1>';

        $html .= '<ul>';
        
        $produtos = DB::select('select * from produtos');

        foreach ($produtos as $p){
            $html .= '<li> Nome: '. $p->nome .',
                Descrição: '. $p->descricao .'</li>';
        }

        $html .= '</h1>';

        return $html;

        
    }
}
