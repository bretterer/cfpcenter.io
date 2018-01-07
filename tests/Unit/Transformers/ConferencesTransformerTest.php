<?php

namespace Tests\Unit\Transformers;

use App\Models\Conference;
use App\Transformers\ConferenceTransformer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConferencesTransformerTest extends TestCase
{
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
            'id' => $this->conference->getId(),
            'name' => $this->conference->getName(),
            'confDate' => $this->conference->getConfDate(),
            'cfpDate' => $this->conference->getCfpDate(),
            'city' => $this->conference->getCity(),
            'state' => $this->conference->getState(),
            'country' => $this->conference->getCountry(),
            'coc' => $this->conference->getCoc(),
            'cocLink' => $this->conference->getCocLink(),
            'website' => $this->conference->getWebsite(),
            'about' => $this->conference->getAbout(),
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
        $this->assertArrayHasKey('confDate', $data);
        $this->assertArrayHasKey('cfpDate', $data);
        $this->assertArrayHasKey('city', $data);
        $this->assertArrayHasKey('state', $data);
        $this->assertArrayHasKey('country', $data);
        $this->assertArrayHasKey('coc', $data);
        $this->assertArrayHasKey('cocLink', $data);
        $this->assertArrayHasKey('website', $data);
        $this->assertArrayHasKey('about', $data);
        $this->assertArrayHasKey('image', $data);
    }
}
