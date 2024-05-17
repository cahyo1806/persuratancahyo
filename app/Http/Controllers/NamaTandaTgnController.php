<?php

namespace App\Http\Controllers;

use App\Models\NamaTandatgn;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class NamaTandaTgnController extends Controller
{
    public function show(string $id):View {

        return view('namatandatgn.profile',[
        'kepalasurat' => NamaTandatgn::findOrFail($id)
        ]);
    }
public function index(): View
    {
       $namatandatgn = NamaTandatgn::latest()->paginate(10);
       return view('namatandatgn.index',compact('namatandatgn'));
    }
    public function create(): View
    {
        return view('namatandatgn.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_tandatgn' => 'required|min:5',
            'jabatan' => 'required|min:5',
            'nip' => 'required|min:5',
        ]);
        NamaTandatgn::create([
            'nama_tandatgn' => $request->nama_tandatgn,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            
        ]);

        return redirect()->route('namatandatgn.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $id): View
    {
        $namatandatgn = NamaTandatgn::findOrFail($id);

        return view('namatandatgn.edit', compact('namatandatgn'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_tandatgn' => 'required|min:5',
            'jabatan' => 'required|min:5',
            'nip' => 'required|min:5',
        ]);

        $namatandatgn = NamaTandatgn::findOrFail($id);
        $namatandatgn->update([
            'nama_tandatgn' => $request->nama_tandatgn,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            
            ]);

        return redirect()->route('namatandatgn.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $namatandatgn = NamaTandatgn::findOrFail($id);
        $namatandatgn->delete();
        return redirect()->route('namatandatgn.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
