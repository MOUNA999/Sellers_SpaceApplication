<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PointVente;
use Illuminate\Http\Request;

class pointVenteAdminController extends Controller
{


    public function index()
    {
        $pointVentes = PointVente::all();
        return view('admin.pointVente.index', compact('pointVentes'));
    }



    public function addPointVenteForm()
    {
        return view('admin.pointVente.add');
    }
    public function updateForm($id)
    {
        $pointVente=PointVente::find($id);
        if (!$pointVente) abort(404);
        return view('admin.pointVente.update', compact('pointVente'));
    }

    public function addPointVente(Request $request) {

        if (!$request->has('libelle') || !$request->has('code')  ) {
            return response()->json(['message' => 'Missing required fields'], 400);
        }

        $pointVente = new PointVente();
        $pointVente->libelle = $request->input('libelle');
        $pointVente->code = $request->input('code');



        $pointVente->save();


        return view('admin.pointVente.add');
    }



    public function updatePointVente(Request $request, $id){
        $point = PointVente::find($id);

        if (is_null($point)) {
            return response()->json(['message' => 'Point of sale not found'], 404);
        }

        $request->validate([
            'libelle' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $point->update($request->only(['libelle', 'code', 'date', 'description']));


        return redirect()->route('pointVente', ['id' => $point->id])->with('success', 'Point of sale updated successfully');
    }
}