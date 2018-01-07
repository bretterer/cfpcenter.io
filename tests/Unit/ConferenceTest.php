<?php

namespace Tests\Unit;

use App\Models\Conference;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConferenceTest extends TestCase
{
    /**
     * @var Conference
     */
    private $conference;

    public function setup()
    {
        parent::setup();

        $this->conference = factory('App\Models\Conference')->create();
    }

    public function testDatabaseHasConferenceId()
    {
        $this->assertDatabaseHas('conferences', ['id' => $this->conference->getId()]);
        $this->assertTrue(is_int($this->conference->getId()));
    }

    public function testDatabaseHasConferenceName()
    {
        $this->assertDatabaseHas('conferences', ['name' => $this->conference->getName()]);
        $this->assertTrue(is_string($this->conference->getName()));
    }

    public function testDatabaseHasConferenceCity()
    {
        $this->assertDatabaseHas('conferences', ['city' => $this->conference->getCity()]);
        $this->assertTrue(is_string($this->conference->getCity()));
    }

    public function testDatabaseHasConferenceState()
    {
        $this->assertDatabaseHas('conferences', ['state' => $this->conference->getState()]);
        $this->assertTrue(is_string($this->conference->getState()));
    }

    public function testDatabaseHasConferenceCountry()
    {
        $this->assertDatabaseHas('conferences', ['country' => $this->conference->getCountry()]);
        $this->assertTrue(is_string($this->conference->getCountry()));
    }

    public function testDatabaseHasConferenceCoc()
    {
        $this->assertDatabaseHas('conferences', ['coc' => $this->conference->getCoc()]);
        $this->assertTrue(is_int($this->conference->getCoc()));
    }

    public function testDatabaseHasCocLink()
    {
        $this->assertDatabaseHas('conferences', ['coc_link' => $this->conference->getCocLink()]);
        $this->assertTrue(is_string($this->conference->getCocLink()));
    }

    public function testDatabaseHasConferenceWebsite()
    {
        $this->assertDatabaseHas('conferences', ['website' => $this->conference->getWebsite()]);
        $this->assertTrue(is_string($this->conference->getWebsite()));
    }

    public function testDatabaseHasConferenceAbout()
    {
        $this->assertDatabaseHas('conferences', ['about' => $this->conference->getAbout()]);
        $this->assertTrue(is_string($this->conference->getAbout()));
    }

    public function testDatabaseHasConferenceImage()
    {
        $this->assertDatabaseHas('conferences', ['image_link' => $this->conference->getImage()]);
        $this->assertTrue(is_string($this->conference->getImage()));
    }
}
