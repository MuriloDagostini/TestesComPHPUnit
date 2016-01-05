<?php

namespace Formulario;

abstract class Elemento{

    protected $html;

    public function getHTML(){
        return $this->html;
    }

} 