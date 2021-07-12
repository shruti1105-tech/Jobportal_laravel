<?php


namespace App\Repository;


use App\Models\City;

class CityRepository implements ICityRepository
{

    public function getAllCity()
    {
        return City::all();
    }

    public function getCityById($id)
    {
        return City::find($id);
    }

    public function createOrUpdate($id = null, $collection = [])
    {
        if (is_null($id)) {
            $city = new City();
            $city->name = $collection['name'];
            return $city->save();
        }
        $city = City::find($id);
        $city->name = $collection['name'];
        return $city->save();
    }

    public function deleteCity($id)
    {
        return City::find($id)->delete();
    }
}
