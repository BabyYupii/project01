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
        $Kain = DB::table('kain')
        ->join('kategorii','kain.Nama_Kain','=','kategorii.Id_Kat')
        ->join('distributor','kain.Distributor','=','distributor.Id_Distributor')
        ->select('kain.*','kategorii.Kategori as Nama_Kain','distributor.Distributor as Distributor')
        ->get();
        
        $DKData = DB::table('kain')->get();
        $JRek  = DB::table('kain')->count();

        return view('uas.index', compact('Kain','DKData', 'JRek'));
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
        
        return view('uas.create', compact('KKat','DKat','KTKat'));
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
            'txId'=>'required|numeric',
            'txKat'=>'required',
            'txStok'=>'required|numeric',
            'txHargaJual'=>'required|numeric',
            'txHargaBeli'=>'required|numeric',
            
        ];
        $msg = [
            'requred'=>'wajib diisi',
            'numeric'=>'diisi dengan data angka',
        ];
        //lakukan validasi form
        $this->validate($request,$aturan,$msg);

        //menambahkan data baru
        Kain::create([
            'Nama_Kain'=>$request->txKain,
            'Id_Kain'=>$request->txId,
            'Distributor'=>$request->txKat,
            'qty'=>$request->txStok,
            'Harga_Jual'=>$request->txHargaJual,
            'Harga_Beli'=>$request->txHargaBeli,
            
        ]);
        return redirect()->route('uas.index');
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
        return view('uas.index', compact('DKData','JRek'));
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
        $edt = Kain::where('Id', $id)->first();
        return view('uas.edit',compact('edt'));
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
        Kain::where('Id', $id)->update([
            'Nama_Kain'=> $request->txKain,
            'Id_Kain'=> $request->txId,
            'Distributor'=> $request->txKat,
            'qty'=>$request->txStok,
            'Harga_Jual'=> $request->txHargaJual,
            'Harga_Beli'=>$request->txHargaBeli,

        ]);
        return redirect()->route('uas.index');
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
        Kain::Where('Id',$id)->delete();
        return redirect()->route('uas.index');
    }
}
