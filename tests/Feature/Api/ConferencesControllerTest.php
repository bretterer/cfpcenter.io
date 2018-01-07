<?php

namespace Tests\Feature\Api;

use Carbon\Carbon;
use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConferencesControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexRoute()
    {
        $response = $this->get('/api/conferences');

        $response->assertStatus(200);
        $response->assertSuccessful();
    }

    public function testFetchRoute()
    {
        $conference = factory('App\Models\Conference')->create();

        $response = $this->get('/api/conferences/' . $conference->getId());
        $response->assertStatus(200);
        $response->assertSuccessful();
    }

    public function testCreateRoute()
    {
        $faker = Factory::create();
        $coc = $faker->boolean(50);

        $response = $this->post('/api/conferences', [
            'name' => ucfirst($faker->word) . ' PHP Conference',
            'confDate' => $faker->date(),
            'cfpDate' => $faker->date(),
            'city' => $faker->city,
            'state' => $faker->state,
            'country' => $faker->country,
            'coc' => $coc,
            'cocLink' => $coc === 0 ? false : $faker->url,
            'website' => $faker->url,
            'about' => $faker->text(),
            'image' => $faker->imageUrl(),
        ]);

        $response->assertSuccessful();
        $response->assertStatus(201);
    }
}
