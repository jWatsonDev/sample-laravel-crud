<?php
namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    public function index()
    {
        $things = Thing::all();
        return response()->json($things);
    }

    public function show($id)
    {
        $thing = Thing::find($id);
        return response()->json($thing);
    }

    public function store(Request $request)
    {
        $thing = Thing::create($request->all());
        return response()->json($thing, 201);
    }

    public function update(Request $request, $id)
    {
        $thing = Thing::find($id);
        $thing->update($request->all());
        return response()->json($thing, 200);
    }

    public function destroy($id)
    {
        Thing::destroy($id);
        return response()->json(null, 204);
    }
}
