<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Services\UnitService;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UnitController extends Controller
{

    public function __construct(protected UnitService $service)
    {
        
    }

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
      
     $this->service->add($request->all());

    }


    public function show(Unit $unit)
    {
        //
    }



    public function update(Request $request, Unit $unit)
    {
        //
    }

    public function destroy(Unit $unit)
    {
        //
    }
}
