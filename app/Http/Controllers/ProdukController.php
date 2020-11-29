<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
	function index(){
		$data['list_produk'] = Produk::all();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->stok = request('stok');
		$produk->save();
		
		return redirect('produk')->with('success', 'Data Berhasil di Tambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->stok = request('stok');
		$produk->save();
		
		return redirect('produk')->with('success', 'Data Berhasil di Edit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('danger', 'Data Berhasil di Hapus');

	}

		function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		//$data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotNull('stok')->get();
		//$data['list_produk'] = Produk::whereTime('createdd_at', '15:59:00')->get();
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [1])->whereYear('createdd_at', '2020')->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('produk.index', $data);
	}
}