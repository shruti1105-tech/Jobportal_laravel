<?php

namespace App\Http\Controllers;

use App\Repository\ICityRepository;
use App\Repository\ICompanyRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CompanyController extends Controller
{
    public $company;
    public $city;

    public function __construct(ICompanyRepository $company, ICityRepository $city)
    {
        $this->company = $company;
        $this->city = $city;
    }

    public function showCompany()
    {
        $companies = $this->company->getAllCompany();
        return View::make('admin.company.index', compact('companies'));
    }

    public function createCompany()
    {
        $city = $this->city->getAllCity();
        return View::make('admin.company.create', compact('city'));
    }

    public function getCompany($id)
    {
        $company = $this->company->getCompanyById($id);
        $city = $this->city->getCityById($id);
        return View::make('admin.company.edit', compact('company', 'city'));
    }

    public function saveCompany(Request $request, $id = null)
    {
        $collection = $request->except(['_token', '_method']);

        if (!is_null($id)) {
            $this->company->createOrUpdate($id, $collection);
        } else {
            $this->company->createOrUpdate($id = null, $collection);
        }

        return redirect()->route('company.show');
    }

    public function deleteCompany($id)
    {
        $this->company->deleteCompany($id);
        return redirect()->route('company.show');
    }
}
