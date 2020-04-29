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
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /**
     * @test
     */
    public function hello_authにGETメソッドでアクセスできる()
    {
        $response = $this->get('hello/auth');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function hello_authにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('hello/auth');
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function auth_logoutにgetメソッドでアクセスできる()
    {
        $response = $this->get('auth/logout');
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function userにgetメソッドでアクセスできる()
    {
        $response = $this->get('user');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function userにpostメソッドでアクセスできる()
    {
        $response = $this->post('user');
        $response->assertStatus(302);
    }

    /**
    * @test
    */
     public function user_thanksにgetメソッドでアクセスできる()
     {
         $response = $this->get('user/thanks');
         $response->assertStatus(302);
     }

     /**
     * @test
     */
      public function user_thanksにpostメソッドでアクセスできる()
      {
          $response = $this->post('user/thanks');
          $response->assertStatus(302);
      }

     /**
     * @test
     */
    public function postsにgetメソッドでアクセスできる()
    {
        $response = $this->get('posts');
        $response->assertStatus(200);
    }




     /**
     * @test
     */
    public function posts_findにgetメソッドでアクセスできる()
    {
        $response = $this->get('posts/find');
        $response->assertStatus(200);
    }
     /**
     * @test
     */
    public function posts_findにpostメソッドでアクセスできる()
    {
        $response = $this->post('posts/find');
        $response->assertStatus(200);
    }





    /**
    * @test
    */
   public function postsにpostメソッドでアクセスできる()
   {
       $response = $this->post('posts');
       $response->assertStatus(302);
   }

    /**
    * @test
    */
    public function commentsにpostメソッドでアクセスできる()
    {
       $response = $this->post('comments');
       $response->assertStatus(302);
    }
}
