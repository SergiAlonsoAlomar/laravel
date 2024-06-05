<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Perro;

class PerroController extends Controller{
    public function index(){
        $user = Auth::user();
        $parejas = Perro::where('raza', $user->raza)
            ->where('sexo', '<>', $user->sexo)
            ->get();

        return view('parejas', compact('user', 'parejas'));
    }

    public function foto($id){
        $user = Auth::user();
        $pareja = Perro::findOrFail($id);
        return view('foto', compact('user', 'pareja'));
    }

    public function create(){
        return view('registro');
    }
    
    public function store(Request $request){
        $request->validate([
            'nick' => 'required|unique:perros',
            'password' => 'required',
            'nombre' => 'required',
            'raza' => 'required',
            'sexo' => 'required',
            'edad' => 'required|numeric',
            'color' => 'required',
            'nombreHumano' => 'required',
            'telefono' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);
    
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
    
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = $request->nick . '.jpg';
            $foto->storeAs('public', $fotoName);
            $data['foto'] = 'storage/' . $fotoName;
        }
        
        Perro::create($data);
    
        return redirect()->route('parejas');
    }
}