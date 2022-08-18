<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\TokoModel;

class Home extends BaseController
{
    public function index()
    {
        return view('beranda', [
            // 'toko' => $toko->findAll()
        ]);
    }

    public function umkm()
    {
        $toko = new TokoModel();
        return view('umkm', [
            'toko' => $toko->findAll()
        ]);
    }

    public function detail_umkm($folder)
    {
        $toko = new TokoModel();
        $cek = $toko->where('folder', $folder)->first();
        $produk = new ProdukModel();
        if ($cek) {
            return view('detail_umkm', [
                'toko' => $cek,
                'produk' => $produk->where('toko_id', $cek['id'])->findAll()
            ]);
        }
    }
}
