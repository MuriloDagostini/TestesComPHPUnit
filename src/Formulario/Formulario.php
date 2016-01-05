<?php

namespace Formulario;

class Formulario extends Elemento{

    public function __construct($nome,$action){

        //valida os argumentos
        if(!is_string($nome) OR !is_string($action)){
            throw new \InvalidArgumentException("Os valores devem ser do tipo string!");
        }

        $this->html['form']['inicio'] = "<form action='{$action}' method='post' name='{$nome}' id='{$nome}'>";
        $this->html['form']['fim'] = "</form>";
    }

    public function addElemento(Elemento $elemento){

        $this->html['elemento'][] = $elemento->getHTML();
    }

    public function render(){
        echo $this->html['form']['inicio'];
        echo implode($this->html['elemento']);
        echo $this->html['form']['fim'];
    }

} 