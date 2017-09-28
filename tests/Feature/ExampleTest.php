<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTestInicio()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testBasicTestNuevaEntrada()
    {
        $response = $this->get('/nuevaEntrada');

        $response->assertStatus(200);
    }

    public function testBasicTestEscritores()
    {
        $response = $this->get('/escritores');

        $response->assertStatus(200);
    }

    public function testBasicTestEspanol()
    {
        $response = $this->get('/idioma/es');

        $response->assertStatus(200);
    }

    public function testBasicTestIngles()
    {
        $response = $this->get('/idioma/en');

        $response->assertStatus(200);
    }

    public function testBasicTestRedirectBorrar()
    {
        $response = $this->get('/borrar');

        $response->assertRedirect('/borrar');
    }

}
