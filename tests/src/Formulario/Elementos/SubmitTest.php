<?php

namespace Formulario\Elementos;

class SubmitTest extends \PHPUnit_Framework_TestCase
{

    public function construtorProvider(){
        $objeto = new \ArrayObject();

        return [
            [5],
            [$objeto],
            [true]
        ];
    }

    public function testVerificaTipoClasse(){
        $this->assertInstanceOf('Formulario\Elementos\Submit',new Submit('teste'));
    }

    public function testVerificaAtributoConstrutor(){
        $this->assertObjectHasAttribute('html',new Submit('teste'));
    }

    /**
     * @dataProvider construtorProvider
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaArgumentosConstrutor($a)
    {
        $inputSubmit = new Submit($a);
    }

}