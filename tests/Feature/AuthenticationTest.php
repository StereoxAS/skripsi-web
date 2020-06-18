<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /** @test */
    public function auth_test_on_page_browse()
    {
        $response = $this->get('/browse')->assertOk();
    }
    /** @test */
    public function auth_test_on_page_upload()
    {
        $response = $this->get('/browse')->assertOk();
    }
    /** @test */
    public function auth_test_on_page_create()
    {
        $response = $this->get('/browse')->assertOk();
    }
    /** @test */
    public function auth_test_on_page_help()
    {
        $response = $this->get('/browse')->assertOk();
    }
    /** @test */
    public function auth_test_on_page_about()
    {
        $response = $this->get('/browse')->assertOk();
    }
}
