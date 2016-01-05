<?php

namespace Formulario;

class FormularioTest extends \PHPUnit_Framework_TestCase
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
        $this->assertInstanceOf('Formulario\Formulario',new Formulario('teste','/'));
    }

    public function testVerificaAtributoConstrutor(){
        $this->assertObjectHasAttribute('html',new Formulario('teste','/'));
    }

    /**
     * @dataProvider construtorProvider
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaArgumentosConstrutor($a,$b)
    {
        $formulario = new Formulario($a,$b);
    }

    public function testVerificaChavesConstrutor(){
        $formulario = new Formulario('teste','/');
        $html = $formulario->getHTML();
        $this->assertArrayHasKey('form',$html);
        $this->assertArrayHasKey('inicio',$html['form']);
        $this->assertArrayHasKey('fim',$html['form']);
    }

    /*
     * Teste função addElemento com mock da classe Text
     */
    public function testVerificaAddElemento(){
        $InputText = $this->getMock('\Formulario\Elementos\Text',array(),array("nome","Nome"));
        $formulario = new Formulario('teste','/');
        $formulario->addElemento($InputText);
        $html = $formulario->getHTML();
        $this->assertArrayHasKey('elemento',$html);
    }

}