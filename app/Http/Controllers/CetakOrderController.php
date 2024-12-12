<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakOrderController extends Controller
{
    public function cetakOrder()
{
    // Ambil data dari tabel order_items
    $orderItems = \App\Models\OrderItem::all();

    // Kirim data ke view
    return view('orders.cetak_order', compact('orderItems'));

    //return view('orders.index', compact('price', 'quantity', 'product_id', 'order_id'));
}

}
