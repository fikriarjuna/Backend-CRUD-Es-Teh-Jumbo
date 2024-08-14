<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressApiController extends Controller
{
    public function index(){
        $addresses = Address::all();
        return response()->json(['message' => 'success', 'data' => $addresses]);
    }

    public function show($id){
        $address = Address::find($id);
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }
        return response()->json(['message' => 'success', 'data' => $address]);
    }

    public function store(Request $request) {
        $request->validate([
            'no_telpon' => 'required|string',
            'alamat' => 'required|string',
            'detail_lain' => 'nullable|string',
        ]);
        
        $address = Address::create($request->all());
        return response()->json(['message' => 'success', 'data' => $address], 201);
    }

    public function update(Request $request, $id) {
        $address = Address::find($id);
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }
        
        $request->validate([
            'no_telpon' => 'required|string',
            'alamat' => 'required|string',
            'detail_lain' => 'nullable|string',
        ]);

        $address->update($request->all());
        return response()->json(['message' => 'success', 'data' => $address]);
    }

    public function destroy($id){
        $address = Address::find($id);
        if (!$address) {
            return response()->json(['message' => 'Address not found'], 404);
        }
        
        $address->delete();
        return response()->json(['message' => 'successfully deleted', 'data' => null]);
    }
}
