<?php

namespace Tests\Unit\Controllers\Api;

use App\Http\Controllers\Api\ConferencesController;
use App\Transformers\ConferenceTransformer;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConferencesControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @var ConferencesController
     */
    private $conferencesController;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | ConferenceTransformer
     */
    private $transformerMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject | Response
     */
    private $responseMock;

    public function setup()
    {
        parent::setup();

        $this->transformerMock = $this->getMockBuilder(ConferenceTransformer::class)
                                        ->disableOriginalConstructor()
                                        ->getMock();

        $this->responseMock = $this->getMockBuilder(Response::class)->disableOriginalConstructor()->getMock();

        $this->conferencesController = new ConferencesController($this->transformerMock, $this->responseMock);
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(ConferencesController::class, $this->conferencesController);
    }

    public function testIndexMethodExists()
    {
        $this->assertTrue(method_exists($this->conferencesController, 'index'));
    }

    public function testFetchMethodExists()
    {
        $this->assertTrue(method_exists($this->conferencesController, 'fetch'));
    }

    public function testCreateMethodExists()
    {
        $this->assertTrue(method_exists($this->conferencesController, 'create'));
    }

    public function testEditMethodExists()
    {
        $this->assertTrue(method_exists($this->conferencesController, 'edit'));
    }

    public function testDeleteMethodExists()
    {
        $this->assertTrue(method_exists($this->conferencesController, 'delete'));
    }
}

