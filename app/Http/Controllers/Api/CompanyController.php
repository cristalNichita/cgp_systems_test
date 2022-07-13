<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getCompanies() {
        $companies = Company::paginate(10);

        return response()->json([
            'data' => $companies
        ]);
    }

    public function getCompaniesByClient($client_id) {

        $client = Client::find($client_id);
        $companies = $client->companies;

        return response()->json([
            'data' => $companies
        ]);
    }
}
