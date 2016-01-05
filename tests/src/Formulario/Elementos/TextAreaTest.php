<?php

namespace Formulario\Elementos;

class TextAreaTest extends \PHPUnit_Framework_TestCase
{

    public function construtorProvider(){
        $objeto = new \ArrayObject();

        return [
            [5,9,9],
            [$objeto,$objeto,$objeto],
            [true,false,true]
        ];
    }

    public function testVerificaTipoClasse(){
        $this->assertInstanceOf('Formulario\Elementos\TextArea',new TextArea('teste','Teste',7));
    }

    public function testVerificaAtributoConstrutor(){
        $this->assertObjectHasAttribute('html',new TextArea('teste','Teste',7));
    }

    /**
     * @dataProvider construtorProvider
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaArgumentosConstrutor($a,$b,$c)
    {
        $inputTextArea = new TextArea($a,$b,$c);
    }

}