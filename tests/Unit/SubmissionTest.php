<?php

namespace Tests\Unit;

use App\Models\Submission;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubmissionTest extends TestCase
{
    /**
     * @var Submission
     */
    private $submission;

    public function setup()
    {
        parent::setup();

        $this->submission = factory('App\Models\Submission')->create();
    }

    public function testDatabaseHasTalkTitle()
    {
        $this->assertDatabaseHas('submissions', ['talk_title' => $this->submission->getTalkTitle()]);
        $this->assertTrue(is_string($this->submission->getTalkTitle()));
    }

    public function testDatabaseHasTalkUserId()
    {
        $this->assertDatabaseHas('submissions', ['user_id' => $this->submission->user->getId()]);
        $this->assertTrue(is_int($this->submission->getUserId()));
    }

    public function testDatabaseHasConferenceId()
    {
        $this->assertDatabaseHas('submissions', ['conference_id' => $this->submission->getConferenceId()]);
        $this->assertTrue(is_int($this->submission->getConferenceId()));
    }

    public function testDatabaseHasTalkLength()
    {
        $this->assertDatabaseHas('submissions', ['talk_length' => $this->submission->getTalkLength()]);
        $this->assertTrue(is_int($this->submission->getTalkLength()));
    }

    public function testDatabaseHasTalkLevel()
    {
        $this->assertDatabaseHas('submissions', ['talk_level' => $this->submission->getTalkLevel()]);
        $this->assertTrue(is_string($this->submission->getTalkLevel()));
    }

    public function testDatabaseHasTalkLabels()
    {
        $this->assertDatabaseHas('submissions', ['labels' => $this->submission->getTalkLabels()]);
        $this->assertTrue(is_string($this->submission->getTalkLabels()));
    }

    public function testDatabaseHasJoindInLink()
    {
        $this->assertDatabaseHas('submissions', ['joindin_link' => $this->submission->getJoindinLink()]);
        $this->assertTrue(is_string($this->submission->getJoindInLink()));
    }
}
