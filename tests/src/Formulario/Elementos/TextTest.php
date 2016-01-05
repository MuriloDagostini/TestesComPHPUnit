<?php

namespace Formulario\Elementos;

class TextTest extends \PHPUnit_Framework_TestCase
{

    public function construtorProvider(){
        $objeto = new \ArrayObject();

        return [
            [5,9],
            [$objeto,$objeto],
            [true,false]
        ];
    }

    public function testVerificaTipoClasse(){
        $this->assertInstanceOf('Formulario\Elementos\Text',new Text('teste','Teste'));
    }

    public function testVerificaAtributoConstrutor(){
        $this->assertObjectHasAttribute('html',new Text('teste','Teste'));
    }

    /**
     * @dataProvider construtorProvider
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaArgumentosConstrutor($a,$b)
    {
        $inputText = new Text($a,$b);
    }

}