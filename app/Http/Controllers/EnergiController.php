<?php

namespace App\Http\Controllers;

use App\Models\Energi;
use Illuminate\Http\Request;

class EnergiController extends Controller
{
    public function index()
    {
        $energi = Energi::all();
        return view('backend.energi.index', compact('energi'));
    }

    public function create()
    {
        return view('backend.energi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_meter' => 'required',
            'tahun_buat' => 'required',
            'tahun_ganti' => 'required',
        ]);

        Energi::create($request->all());

        return redirect()->intended('/energi')
            ->with('success', 'Data Energi baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $energi = Energi::find($id);
        return view('backend.energi.edit', compact('energi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_meter' => 'required',
            'tahun_buat' => 'required',
            'tahun_ganti' => 'required',
        ]);

        $energi = Energi::find($request->id);
        $energi->update($request->all());

        return redirect()->intended('/energi')
            ->with('success', 'Data Energi telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $energi = Energi::find($id);
        $energi->delete();

        return redirect()->intended('/energi')
            ->with('success', 'Data Energi telah berhasil dihapus');
    }
}
