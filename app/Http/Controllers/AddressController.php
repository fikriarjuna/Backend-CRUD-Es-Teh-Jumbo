<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index() {
        $address = Address::all();
        return view('address.index', compact(['address']));
    }

    public function create() {
        return view('address.create');
    }

    public function store(Request $request) {
        Address::create($request->all());
        return redirect('/address');
    }

    public function edit($id) {
        $address = Address::find($id);
        return view('address.edit', compact(['address']));
    }

    public function update(Request $request, $id) {
        $address = Address::find($id);
        $address->update($request->all());
        return redirect('/address');
    }

    public function destroy($id) {
        $address = Address::find($id);
        $address->delete();
        return redirect('/address');
    }
}
