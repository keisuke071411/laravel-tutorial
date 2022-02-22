<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/admin/movies');
        $response = $this->post('/admin/movies/store',[
            'title' => 'ngr',
            'image_url' => 'https://ptera-publish.topaz.dev/project/01FSGT2W9ZNV6BRNG1TX8PJ0N0.png'
        ]);
        
        $response->assertRedirect('/admin/movies');
    }
}
