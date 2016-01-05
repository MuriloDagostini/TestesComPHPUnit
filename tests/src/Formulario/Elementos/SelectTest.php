<?php

namespace Formulario\Elementos;

class SelectTest extends \PHPUnit_Framework_TestCase
{

    public function construtorProvider(){
        $objeto = new \ArrayObject();

        return [
            [5,9,3],
            [$objeto,$objeto,$objeto],
            [true,false,true]
        ];
    }

    public function testVerificaTipoClasse(){
        $this->assertInstanceOf('Formulario\Elementos\Select',new Select('teste','Teste',array('1','2')));
    }

    public function testVerificaAtributoConstrutor(){
        $this->assertObjectHasAttribute('html',new Select('teste','Teste',array('1','2')));
    }

    /**
     * @dataProvider construtorProvider
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaArgumentosConstrutor($a,$b,$c)
    {
        $inputSelect = new Select($a,$b,$c);
    }

}