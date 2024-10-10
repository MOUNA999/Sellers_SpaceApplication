<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addProductToOrder(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $product = Product::findOrFail($request->product_id);

        $quantity = $request->quantity ?? 1;

        $order->products()->attach($product, ['quantity' => $quantity]);

        return redirect()->back()->with('success', 'Product added to order successfully.');
    }

    public function getOrderProducts($orderId)
    {
        $order = Order::findOrFail($orderId);
        $products = $order->products;

        return view('order.products', compact('order', 'products'));
    }
}
