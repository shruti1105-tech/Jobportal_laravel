<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Repository\ICityRepository;

class CityController extends Controller
{
    public $city;

    public function __construct(ICityRepository $city)
    {
        $this->city = $city;
    }

    public function showCity()
    {
        $cities = $this->city->getAllCity();
        return View::make('admin.city.index', compact('cities'));
    }

    public function createCity()
    {
        return View::make('admin.city.create');
    }

    public function getCity($id)
    {
        $city = $this->city->getCityById($id);
        return View::make('admin.city.edit', compact('city'));
    }

    public function saveCity(Request $request, $id = null)
    {
        $collection = $request->except(['_token', '_method']);

        if (!is_null($id)) {
            $this->city->createOrUpdate($id, $collection);
        } else {
            $this->city->createOrUpdate($id = null, $collection);
        }

        return redirect()->route('city.show');
    }

    public function deleteCity($id)
    {
        $this->city->deleteCity($id);
        return redirect()->route('city.show');
    }
}
