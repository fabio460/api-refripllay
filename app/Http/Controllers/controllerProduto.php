<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelProduto;
class controllerProduto extends Controller
{
    public function index()
    {
        return modelProduto::all();
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        modelProduto::create($request->All());
    }
    public function show($id)
    {
       return modelProduto::find($id);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        modelProduto::findOrFail($id)->update($request->all());
    }
    public function destroy($id)
    {
        modelProduto::findOrFail($id)->delete();
    }
}
