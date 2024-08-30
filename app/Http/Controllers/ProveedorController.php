<?php
namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    protected $table = 'proveedores';
    public function index() {
        $proveedors = Proveedor::all();
        return view('proveedors.proveedor', ["proveedor"=> $proveedors]);
    }
    
    public function crear(){
        return view('proveedors.creando');
    }

    public function show($id) {

        $proveedor = Proveedor::findOrFail($id);
        return view('proveedors.verProveedor',["datos"=> $proveedor]);
    }

    public function store(Request $request)
    {
        return redirect()->route('proveedor.index')->with('success', 'Proveedor creado exitosamente.');
    }

    public function destroy(Proveedor $ProveedorID) {
        $ProveedorID->delete();
        return redirect()->route('proveedor.index')->with('success', 'Se elimino.');
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:proveedor,Nombre,' . $id . ',ProveedorID',  
        
        ]);
        
    
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($validatedData);
    
        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado exitosamente.');
    }
}
