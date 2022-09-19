<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $manufacturers = Manufacturer::all();
        return JsonResource::collection($manufacturers);
    }
}
