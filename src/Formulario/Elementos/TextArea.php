<?php

namespace Formulario\Elementos;

class TextArea extends \Formulario\Elemento implements \Formulario\Interfaces\TextArea{

    public function __construct($id_nome,$titulo,$rows){

        //valida os argumentos
        if(!is_string($id_nome) OR !is_string($titulo) OR !is_numeric($rows)){
            throw new \InvalidArgumentException("Argumentos do tipo inválido! (String 1, String 2 , Numeric 3)");
        }

        $this->html = "<div class='form-group'>";
        $this->html .= "    <textarea name='{$id_nome}' id='{$id_nome}' placeholder='{$titulo}' class='form-control' rows='{$rows}' /></textarea> ";
        $this->html .= "</div>";
        $this->html;
    }
} 