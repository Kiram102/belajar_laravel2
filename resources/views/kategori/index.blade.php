$produk = produks::all();
return view('produk.index', compact('produk'));