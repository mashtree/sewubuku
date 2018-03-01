<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reader;
 
class ReaderController extends Controller
{
    public function index()
    {
        return Reader::all();
    }
 
    public function show(Reader $reader)
    {
        return $reader;
    }

    public function store(Request $request)
    {
        $reader = Reader::create($request->all());

        return response()->json($reader, 201);
    }

    public function update(Request $request, Reader $reader)
    {
        $reader->update($request->all());

        return response()->json($reader, 200);
    }

    public function delete(Reader $reader)
    {
        $reader->delete();

        return response()->json(null, 204);
    }
}
