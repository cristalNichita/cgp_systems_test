<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getClients() {
        $clients = Client::paginate(10);

        return response()->json([
            'data' => $clients
        ]);
    }

    public function getClientsByCompany($company_id) {
        $company = Company::find($company_id);
        $clients = $company->clients;

        return response()->json([
            'data' => $clients
        ]);
    }
}
