<?php


namespace App\Repository;


use App\Models\Company;

class CompanyRepository implements ICompanyRepository
{

    public function getAllCompany()
    {
        return Company::all();
    }

    public function getCompanyById($id)
    {
        return Company::find($id);
    }

    public function createOrUpdate($id = null, $collection = [])
    {
        if (is_null($id)) {
            $company = new Company();
            $company->name = $collection['name'];
            $company->city_id = $collection['city_id'];
            $company->phone_no = $collection['phone_no'];
            $company->website = $collection['website'];
            $company->description = $collection['description'];
            return $company->save();
        }
        $company = Company::find($id);
        $company->name = $collection['name'];
//        $company->city_id = $collection['city_id'];
        $company->phone_no = $collection['phone_no'];
        $company->website = $collection['website'];
        $company->description = $collection['description'];
        return $company->save();
    }

    public function deleteCompany($id)
    {
        return Company::find($id)->delete();
    }
}
