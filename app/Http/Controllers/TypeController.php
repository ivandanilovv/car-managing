<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $types = Type::all();
        return JsonResource::collection($types);
    }
}
