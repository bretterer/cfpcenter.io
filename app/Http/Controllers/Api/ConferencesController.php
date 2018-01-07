<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ConferenceRequest;
use App\Models\Conference;
use App\Transformers\ConferenceTransformer;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    /**
     * @var ConferenceTransformer
     */
    private $transformer;

    /**
     * @var Response
     */
    private $response;

    public function __construct(ConferenceTransformer $transformer, Response $response)
    {
        $this->transformer = $transformer;
        $this->response = $response;
    }

    public function index() : Response
    {
        $conferences = Conference::all();

        return $this->response
            ->setStatusCode(200)
            ->setContent(fractal($conferences)->transformWith($this->transformer)->includeTags()->toArray());
    }

    public function fetch(Request $request) : Response
    {
        $conference = Conference::byConferenceId($request->id)->get();

        return $this->response
            ->setStatusCode(200)
            ->setContent(fractal($conference)->transformWith($this->transformer)->toArray());
    }

    public function create(ConferenceRequest $request)
    {
        $conference = new Conference();

        $conference->setName($request->getName());
        $conference->setConfDate($request->getConfDate());
        $conference->setCfpDate($request->getCfpDate());
        $conference->setCity($request->getCity());
        $conference->setState($request->getState());
        $conference->setCountry($request->getCountry());
        $conference->setCoc($request->getCoc());
        $conference->setCocLink($request->getCocLink());
        $conference->setAbout($request->getAbout());
        $conference->setWebsite($request->getWebsite());
        $conference->setImage($request->getImage());

        $conference->save();

        return $this->response->setStatusCode(201);
    }

    public function edit(ConferenceRequest $request)
    {
        $conference = Conference::byConferenceId($request->getId())->get();

        $conference->setName($request->getName());
        $conference->setConfDate($request->getConfDate());
        $conference->setCfpDate($request->getCfpDate());
        $conference->setCity($request->getCity());
        $conference->setState($request->getState());
        $conference->setCountry($request->getCountry());
        $conference->setCoc($request->getCoc());
        $conference->setCocLink($request->getCocLink());
        $conference->setAbout($request->getAbout());
        $conference->setWebsite($request->getWebsite());
        $conference->setImage($request->getImage());

        $conference->save();

        return $this->response->setStatusCode(202)->setContent($request->getName() . ' was edited');
    }

    public function delete(Request $request)
    {
        Conference::byConferenceId($request->id)->delete();

        return $this->response->setStatusCode(204)->setStatusCode('Conference was deleted');
    }
}
