<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index_front()
    {



        $products = Products::All();
        return view('layout-frontend.content.produk-content',compact(
            'products'

        ));
    }


    public function index()
    {


        // Untuk mengambil Data Produk dari database
        $products = Products::All();
        // Untuk menghitung Jumlah Produk dari database
        $products_count = $products->count();




        return view('layouts.home.home-admin',compact(

            'products','products_count'


        ));
    }


    public function indexProduk()
    {



        // Untuk mengambil Data Produk dari database
        $products = Products::All();
        // Untuk menghitung Jumlah Produk dari database
        $products_count = $products->count();





        return view('layouts.content.produk.index',compact(
            'products','products_count'

        ));
    }


    public function tambahDataProduk()
    {
        return view('layouts.content.produk.add');
    }




    // PROSES TAMBAH DATA BLOG
    public function prosestambahproduk(Request $request)
    {
        //  $this->validate($request, [
        //     'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        //     'judul'     => 'required',
        //     'deskripsi'   => 'required'
        // ]);

        //upload image
        $product = new Products();
        $product->judul = $request->get('judul');
        $product->deskripsi = $request->get('deskripsi');
        $product->diskon = $request->get('diskon');
        $product->price = $request->get('price');


        if ($request->hasFile('gambar')) {
            // $post->delete_image();
            $gambar = $request->file('gambar');
            // dd($gambar);exit;
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('img', $name);
            $product->gambar = $name;
        }
        $product->save();

        // dd($product);
        // dd($blogs);
        if($product){
            //redirect dengan pesan sukses
            return redirect()->route('indexProduk')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('indexProduk')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


    // PROSES Hapus
    public function hapusDataProduk($id)
    {
        // echo $id; exit;
        $product = Products::where('id',$id)->delete();

        if($product){
            //redirect dengan pesan sukses
            return redirect()->route('indexProduk')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('indexProduk')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
    public function editDataProducts($id)
    {
        $products = Products::findOrFail($id);
        return view('layouts.content.produk.edit', compact('products'));
    }

    public function updateDataProduct(Request $request, $id)
    {
         $this->validate($request, [
            'gambar'     => 'image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        $product = Products::findOrFail($id);
        $product->judul = $request->get('judul');
        $product->deskripsi = $request->get('deskripsi');
        $product->diskon = $request->get('diskon');
        $product->price = $request->get('price');


        if ($request->hasFile('gambar')) {
            // $post->delete_image();

            if($request->file('gambar') == ""){
                $gambar = $request->file('gambar_old');
            }else{
                 $gambar = $request->file('gambar');
            }
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('img', $name);
            $product->gambar = $name;
        }
        $product->save();


        // dd($blogs);
        if($product){
            //redirect dengan pesan sukses
            return redirect()->route('indexProduk')->with(['success' => 'Data Berhasil DiEdit!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('indexProduk')->with(['error' => 'Data Gagal DiEdit!']);
        }
    }



}
