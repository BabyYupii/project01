<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategorii;
use App\Models\Kain;
use App\Models\Distributor;
use Illuminate\Support\Facades\DB;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan Data 
        $Kain = DB::table('Kain')
        ->join('Kategorii','Kain.Nama_Kain','=','Kategorii.Kategori')
        ->join('Distributor','Kain.Distributor','=','Distributor.Distributor')
        ->get();
        $DKData  = DB::table('Kain')->get();
        $JRek  = DB::table('Kain')->count();

        return view('Uas.index', compact('Kain','DKData','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $KKat = Kain::get();
        $DKat = Distributor::get();
        $KTKat = Kategorii::get();
        
        return view('Uas.create', compact('KKat','DKat','KTKat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $aturan = [
            'txKain'=>'required',
            'txID'=>'required|numeric',
            'txHargaJual'=>'required|numeric',
            'txHargaBeli'=>'required|numeric',
            'txStok'=>'required|numeric',
            
        ];
        $msg = [
            'requred'=>'wajib diisi',
            'numeric'=>'diisi dengan data angka',
        ];
        //lakukan validasi form
        $this->validate($request,$aturan,$msg);

        //menambahkan data baru
        produks::create([
            'Nama_Kain'=>$request->txKain ,
            'Id_Kain'=>$request->txId,
            'Harga_Jual'=>$request->txHargaJual,
            'Harga_Beli'=>$request->txHargaBeli,
            'qty'=>$request->txStok,
            
        ]);
        return redirect()->route ('Uas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kreteria = "%".$id."%";
        $DKData = Kain::where('Nama_Kain','like',$kreteria)->get();
        $JRek = Kain::where('Nama_Kain','like',$kreteria)->count();
        return view('Uas.index', compact('KData','JRek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
