<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Ligne_commande;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    function index(){
        return view('admin.commande.index');
    }


//---------API--------------------------------------------------------------------------------------------------------------------------------------------
public function getOrder()
{
    $order = Order::with('lignesCommandes')->latest()->get();
    return response()->json($order, 200);
}
//-------------------------------------
public function getById($id)
{
    $order = Order::with('lignesCommandes')->find($id);
    if (is_null($order)) {
        return response()->json(['message' => 'Order Not Found '], 404);
    }
    return response()->json($order, 200);
}
//---------------------------------------
public function getByCodeOrder($code)
{
    $orders = Order::with('lignesCommandes')->where('code', $code)->get();
    return response()->json($orders);
}
//---------------------------------------
public function getOrdersByDate(Request $request, $date_debut, $date_fin)
{
    $orders = Order::with('lignesCommandes')->whereBetween('date', [$date_debut, $date_fin])->get();

    return response()->json($orders);
}
//------------------------------------
public function addOrder(Request $request)
{
    $validatedData = $request->validate([
        'total' => 'required|numeric',
        'subTotal' => 'required|numeric',
        'remise' => 'required|numeric',
        'client_ID' => 'required|integer',
        'caisse_ID' => 'required|integer',
        'vendeur_ID' => 'required|integer',
        'lignes_commandes' => 'required|array',
    ]);

    $order = new Order();
    $order->code = $this->generateCode();
    $order->date = now();
    $order->total = $validatedData['total'];
    $order->subTotal = $validatedData['subTotal'];
    $order->remise = $validatedData['remise'];
    $order->client_ID = $validatedData['client_ID'];
    $order->caisse_ID = $validatedData['caisse_ID'];
    $order->vendeur_ID = $validatedData['vendeur_ID'];

    $order->save();

    foreach ($validatedData['lignes_commandes'] as $ligne) {
        $ligne_commande = new Ligne_commande();
        $ligne_commande->order_ID = $order->id;
        $ligne_commande->product_ID = $ligne['product_ID'];
        $ligne_commande->quantity = $ligne['quantity'];
        $ligne_commande->total = $ligne['total'];
        $ligne_commande->remise = $ligne['remise'];

        $ligne_commande->save();
    }

    return response()->json(['message' => 'Commande ajoutee avec succes'], 201);
}private function generateCode()
{
    $lastCode = Cache::remember('last_code', 60, function () {
        $latestCode = Order::latest()->first()->code;
        return $latestCode ? intval($latestCode) : 0;
    });
    $lastCode++;
    Cache::put('last_code', $lastCode, 60);
    return str_pad($lastCode, 8, '0', STR_PAD_LEFT);
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------

public function caisse2(Request $request)
{
    $donnees = Order::where('caisse_ID', '=', 2)
        ->paginate(10);

    return view('admin.order.index', compact('donnees'));
}
public function caisse1(Request $request)
{
    $donnees = Order::where('caisse_ID', '=', 1)
        ->paginate(10);

    return view('admin.order.index', compact('donnees'));
}

}
