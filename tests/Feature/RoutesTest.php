<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      $this->get("/")->assertStatus(200);
      $this->get("/registro_datos")->assertStatus(500);
      $this->get("/register_lots")->assertStatus(200);

      $this->post("/update_estate")->assertStatus(200);

      $this->post("/create_data")->assertStatus(200);
      $this->post("/remove_estate")->assertStatus(200);
      $this->post("/add_estate")->assertStatus(200);
      $this->post("/create_estate")->assertStatus(200);
      $this->post("/create_lots")->assertStatus(200);
    }
}
