<?php

namespace Formulario;

use Formulario\Elementos\Text;

class FormularioTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaTipoClasse(){
        $this->assertInstanceOf("Formulario\Formulario",new Formulario('teste','/'));
    }

    public function testVerificaAtributoConstrutor(){
        $this->assertObjectHasAttribute('html',new Formulario('teste','/'));
    }

    public function construtorProvider(){
        $objeto = new Text('Nome','nome');

        return [
            [5,9],
            [$objeto,$objeto],
            [true,false]
        ];
    }

    /**
     * @dataProvider construtorProvider
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaArgumentosConstrutor($a,$b){
        $formulario = new Formulario($a,$b);
    }

    public function testVerificaChavesConstrutor(){
        $formulario = new Formulario('teste','/');
        $html = $formulario->getHTML();
        $this->assertArrayHasKey('form',$html);
        $this->assertArrayHasKey('inicio',$html['form']);
        $this->assertArrayHasKey('fim',$html['form']);
    }

    public function testVerificaChaveElemento(){
        $formulario = new Formulario('teste','/');
        $formulario->addElemento(new Text('nome','Nome'));
        $html = $formulario->getHTML();
        $this->assertArrayHasKey('elemento',$html);
    }

    public function testVerificaSeElementoEString(){
        $formulario = new Formulario('teste','/');
        $formulario->addElemento(new Text('nome','Nome'));
        $html = $formulario->getHTML();
        $this->assertContainsOnly('string',$html['elemento']);
    }
}