<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function getId()
    {
        return $this->get('id');
    }

    public function getName()
    {
        return $this->get('name');
    }

    public function getCity()
    {
        return $this->get('city');
    }

    public function getState()
    {
        return $this->get('state');
    }

    public function getCountry()
    {
        return $this->get('country');
    }

    public function getCoc()
    {
        return $this->get('coc');
    }

    public function getCocLink()
    {
        return $this->get('cocLink');
    }

    public function getWebsite()
    {
        return $this->get('website');
    }

    public function getImage()
    {
        return $this->get('image');
    }

    public function getAbout()
    {
        return $this->get('about');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'coc' => 'required|bool',
            'cocLink' => 'required|string',
            'website' => 'required|string',
            'about' => 'required|string',
            'image' => 'required|string'
        ];
    }
}
