<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;

class UrunController extends Controller
{
    public function index(){
        $urunler = Urun::all();
        return view('urunler.index', ['urunler'=> $urunler]);
    }

    public function create(){
       return view('urunler.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0, 2',
            'description' => 'nullable',

        ]);

        $yeniUrun = Urun::create($data);
        return redirect(route('urun.index'));
    }
         
 public function edit(Urun $urun){
        return view('urunler.edit', ['urun' => $urun]);

 }
    

public function update(Urun $urun, Request $request){
    $data = $request->validate([
        'name' => 'required',
        'qty' => 'required|numeric',
        'price' => 'required|decimal:0, 2',
        'description' => 'nullable',

    ]);

    $urun->update($data);
    return redirect(route('urun.index'))->with('Başarılı', 'Urun Başarıyla Güncellendi');

}

public function delete(Urun $urun){

    $urun->delete();
    return redirect(route('urun.index'))->with('Başarılı', 'Ürün başarıyla silindi');
}

}
