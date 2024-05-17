<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KepalaSuratController extends Controller
{
    public function show(string $id):View {

        return view('kepalasurat.profile',[
        'kepalasurat' => KepalaSurat::findOrFail($id)
        ]);
    }
public function index(): View
    {
       $kepalasurat = KepalaSurat::latest()->paginate(10);
       return view('kepalasurat.index',compact('kepalasurat'));
    }
    public function create(): View
    {
        return view('kepalasurat.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_kop' => 'required|min:5',
            'alamat_kop' => 'required|min:5',
            'nama_tujuan' => 'required|min:5',
            'id_user' => 'required|min:5',
        ]);
        KepalaSurat::create([
            'nama_kop' => $request->nama_kop,
            'alamat_kop' => $request->alamat_kop,
            'nama_tujuan' => $request->nama_tujuan,
            'id_user' => $request->id_user,
            
        ]);

        return redirect()->route('kepalasurat.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $kepalasurat = KepalaSurat::findOrFail($id);

        return view('kepalasurat.edit', compact('kepalasurat'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_kop' => 'required|min:5',
            'alamat_kop' => 'required|min:5',
            'nama_tujuan' => 'required|min:5',
            'id_user' => 'required|min:5',
        ]);

        $kepalasurat = KepalaSurat::findOrFail($id);
        $kepalasurat->update([
            'nama_kop' => $request->nama_kop,
            'alamat_kop' => $request->alamat_kop,
            'nama_tujuan' => $request->nama_tujuan,
            'id_user' => $request->id_user,
            
            ]);

        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kepalasurat = KepalaSurat::findOrFail($id);
        $kepalasurat->delete();
        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
