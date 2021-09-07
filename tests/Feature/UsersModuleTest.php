<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
  function cargar_lista_usuarios()
  {
      /**  @test */
      $this->get('/usuarios')
      ->asserStatus(200)
      ->assertSee('Usuarios Registrados');
  }


  function crear_lista_usuarios()
  {
      /**  @test */
      $this->get('/usuarios/nuevo')
      ->asserStatus(200)
      ->assertSee('Crear uevo usuarios');
  }

  function cargar_detalle_usuarios()
  {
      /**  @test */
      $this->get('/usuarios/5')
      ->asserStatus(200)
      ->assertSee('Cargar usuarios');
  }
}
