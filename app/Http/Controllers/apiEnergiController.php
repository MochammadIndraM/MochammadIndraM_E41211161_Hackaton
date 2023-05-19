<?php

namespace App\Http\Controllers;

use App\Models\Energi;
use Illuminate\Http\Request;

class apiEnergiController extends Controller
{
    public function index()
    {
        $energi = Energi::all();
        return response()->json(['energi' => $energi]);
    }

    public function create()
    {
        // Kode untuk menampilkan form create
    }

    public function store(Request $request)
    {


        $energi = energi::create($request->all());

        return response()->json(['message' => 'Data energi baru telah berhasil disimpan', 'energi' => $energi]);
    }

    public function edit($id)
    {
        // Kode untuk menampilkan form edit
    }

    public function update(Request $request, $id)
    {


        $energi = Energi::find($id);
        $energi->update($request->all());

        return response()->json(['message' => 'Data energi telah berhasil diperbarui', 'energi' => $energi]);
    }

    public function destroy($id)
    {
        $energi = Energi::find($id);
        $energi->delete();

        return response()->json(['message' => 'Data Energi telah berhasil dihapus']);
    }
}
