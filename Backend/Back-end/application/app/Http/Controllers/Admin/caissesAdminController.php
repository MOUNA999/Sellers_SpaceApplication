<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caisse;
use App\Models\PointVente;
use App\Models\Product;
class caissesAdminController extends Controller
{
    function index(Request $request){
        $data = Caisse::with('pointVente');

        if ($request->has('date_filter')) {
            $data = $data->whereDate('date', '=', $request->input('date_filter'));
        }

        if ($request->has('code_filter')) {
            $data = $data->where('code_caisse', 'LIKE', '%'. $request->input('code_filter'). '%');
        }

        $data = $data->get();

        return view('admin.caisse.index', compact('data'));
    }
    public function addCaisseForm()
    {
        return view('admin.caisse.add');
    }
    public function updateForm($id)
    {
        $caisse=Caisse::find($id);
        $pointsVente = PointVente::all();
        if (!$caisse) abort(404);

        return view('admin.caisse.update', compact('caisse', 'pointsVente'));
    }

    public function addCaisse(Request $request)
    {
  

        Caisse::create([
            'code_caisse' => $request->input('code_caisse'),
            'date' => $request->input('date'),
            'point_vente_ID' => $request->input('point_vente_ID'),
            'code' => $request->input('code'),
        ]);

        return view('admin.caisse.add');
    }

    public function updateCaisse(Request $request, $id){
        $caisse = Caisse::find($id);

        if (is_null($caisse)) {
            return response()->json(['message' => 'Chechout not found'], 404);
        }

        $caisse->update($request->all());


        return redirect()->route('caisse', ['id' => $caisse->id])->with('success', 'Checkout updated successfully');
    }



}