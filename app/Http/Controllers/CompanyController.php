<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCompany;

class CompanyController extends Controller
{
    public function store(StoreCompany $request)
    {
        $data = $request->validated();


        return back()->with(key: 'success', value: 'Empresa cadastrada com sucesso!');
    }
}
