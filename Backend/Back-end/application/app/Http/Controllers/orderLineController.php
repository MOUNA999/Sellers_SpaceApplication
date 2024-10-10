<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\OrderLine;

class orderLineController extends Controller
{
    public function addProductToOrderLine(Request $request, $orderLineId)
    {
        $orderLine = OrderLine::findOrFail($orderLineId);
        $product = Product::findOrFail($request->product_id);

       
        $orderLine->products()->attach($product, ['quantity' => $request->quantity]);

        return redirect()->back()->with('success', 'Product added to order line successfully.');
    }

    public function getOrderLineProducts($orderLineId)
    {
        $orderLine = OrderLine::findOrFail($orderLineId);
        $products = $orderLine->products;

        return view('order_line.products', compact('orderLine', 'products'));
    }
}