<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|max:2048', // Optional: Jika ada upload gambar
        ]);

        // Menyimpan data produk
        $product = new Product();
        $product->user_id = Auth::id(); // Mengaitkan dengan user yang sedang login
        $product->nama_produk = $request->nama_produk;
        $product->kategori = $request->kategori;
        $product->gender = $request->gender;
        $product->price = $request->price;
        $product->deskripsi = $request->deskripsi;

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }
        $product->save();

        // Redirect kembali ke halaman sebelumnya atau tampilkan produk
        return redirect()->back()->with('success', 'Product added successfully!');
    }
    public function show()
    {
        $products = Product::where('user_id', Auth::id())->get();
        if ($products->isEmpty()) {
            return view('ppartner')->with('message', 'No products found');
        }
        return view('ppartner', compact('products'));
    }
    public function getProductsByUser($userId)
    {
        return Product::where('user_id', $userId)->get();
    }
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk
        return view('dashboard', compact('products')); // Mengarahkan ke view dengan data produk
    }


}