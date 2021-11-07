<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;
class ThingController extends Controller
{
    public function index()
    {
        $things = Thing::all()->toArray();
        return array_reverse($things);      
    }

    public function store(Request $request)
    {
        $thing = Thing::create([
            'name' => $request->input('name'),
        ]);
        $thing->save();

        return response()->json('Thing created successfully!');
    }
}
