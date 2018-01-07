<?php

namespace Tests\Unit\Transformers;

use App\Models\Conference;
use App\Transformers\ConferenceTransformer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConferencesTransformerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @var Conference
     */
    private $conference;

    /**
     * @var array
     */
    private $testData;

    /**
     * @var ConferenceTransformer
     */
    private $transformer;

    public function setup()
    {
        parent::setup();

        $this->conference = factory('App\Models\Conference')->create();

        $this->testData = [
            'name' => $this->conference->getName(),
            'city' => $this->conference->getCity(),
            'state' => $this->conference->getState(),
            'country' => $this->conference->getCountry(),
            'coc' => $this->conference->getCoc(),
            'cocLink' => $this->conference->getCocLink(),
            'website' => $this->conference->getWebsite(),
            'image' => $this->conference->getImage(),
        ];

        $this->transformer = new ConferenceTransformer();
    }

    public function testTransformerTransformsData()
    {
        $this->assertEquals($this->testData, $this->transformer->transform($this->conference));
    }

    public function testTransformerHasRightKeys()
    {
        $data = $this->transformer->transform($this->conference);

        $this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('city', $data);
        $this->assertArrayHasKey('state', $data);
        $this->assertArrayHasKey('country', $data);
        $this->assertArrayHasKey('coc', $data);
        $this->assertArrayHasKey('cocLink', $data);
        $this->assertArrayHasKey('website', $data);
        $this->assertArrayHasKey('image', $data);
    }
}
