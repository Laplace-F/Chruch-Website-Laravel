<?php

namespace App\Http\Controllers;

use App\Models\Prayer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnCallback;

use App\Models\Shermon;
use Illuminate\Validation\Rules\In;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['jumlahkegiatan'] = DB::table('kegiatan')->count();
        $data['jumlahwhorsip'] = DB::table('whorsip')->count();
        $data['jumlahshermon'] = DB::table('shermon')->count();
        $data['jumlahprayer'] = DB::table('prayer')->count();
        return view('admin.dashboard', $data);
    }

    public function kegiatan()
    {
        $data['kegiatan'] = DB::table('kegiatan')->get();
        return view('admin.kegiatan', $data);
    }

    public function kegiatantambah()
    {
        return view('admin.kegiatantambah');
    }

    public function kegiatansimpan(Request $request)
    {
        $request->validate([
            'judulkegiatan' => 'required|string|max:255',
            'deskripsikegiatan' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'tanggalkegiatan' => 'required|date',
            'foto' => 'nullable|image|mimes:png,jpg,jpeg,gif,webp,svg|max:5048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->getClientOriginalName();
            $namafoto = $foto;

            $request->file('foto')->storeAs('uploads', $namafoto, 'public');
        }

        DB::table('kegiatan')->insert([
            'judulkegiatan' => $request->judulkegiatan,
            'deskripsikegiatan' => $request->deskripsikegiatan,
            'lokasi' => $request->lokasi,
            'tanggalkegiatan' => $request->tanggalkegiatan,
            'foto' => $namafoto,
        ]);

        return redirect('admin/kegiatan')->with('success', 'Data berhasil ditambahkan');
    }
    public function kegiatanedit($id)
    {
        $data['kegiatan'] = DB::table('kegiatan')
            ->where('idkegiatan', $id)
            ->first();

        return view('admin.kegiatanedit', $data);
    }

    public function kegiataneditsimpan(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judulkegiatan' => 'required',
            'deskripsikegiatan' => 'required',
            'tanggalkegiatan' => 'required|date',
            'foto' => 'nullable|mimes:png,jpg,jpeg,gif,webp,svg|max:5048',
        ]);

        // Data yang akan diperbarui
        $data = [
            'judulkegiatan' => $request->judulkegiatan,
            'deskripsikegiatan' => $request->deskripsikegiatan,
            'tanggalkegiatan' => $request->tanggalkegiatan,
            'lokasi' => $request->lokasi,
        ];

        if ($request->hasFile('foto')) {
            $oldFoto = DB::table('kegiatan')->select('foto')->where('idkegiatan', $id)->first()->foto;

            if (!empty($oldFoto) && file_exists(storage_path('app/public/uploads/' . $oldFoto))) {
                unlink(storage_path('app/public/uploads/' . $oldFoto));
            }

            $foto = $request->file('foto');
            $namafoto = date('YmdHis') . '_' . $foto->getClientOriginalName();
            $foto->storeAs('uploads', $namafoto, 'public');

            $data['foto'] = $namafoto;
        }

        DB::table('kegiatan')->where('idkegiatan', $id)->update($data);

        return redirect('admin/kegiatan')->with('success', 'Data berhasil diperbarui');
    }

    public function kegiatanhapus($id)
    {
        $oldFoto = DB::table('kegiatan')->select('foto')->where('idkegiatan', $id)->first()->foto;

        if (!empty($oldFoto) && file_exists(storage_path('app/public/uploads/' . $oldFoto))) {
            unlink(storage_path('app/public/uploads/' . $oldFoto));
        }
        DB::table('kegiatan')->where('idkegiatan', $id)->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }

    public function whorsip()
    {
        $data['whorsip'] = DB::table('whorsip')->get();
        return view('admin.whorsip', $data);
    }

    public function whorsiptambah()
    {
        return view('admin.whorsiptambah');
    }

    public function whorsipsimpan(Request $request)
    {
        $request->validate([
            'judulwhorsip' => 'required',
            'lokasi' => 'required',
            'jam' => 'required',
            'foto' => 'nullable|mimes:png,jpg,jpeg,gif,webp,svg|max:5048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->getClientOriginalName();
            $namafoto = $foto;

            $request->file('foto')->storeAs('uploads', $namafoto, 'public');
        }

        DB::table('whorsip')
            ->insert([
                'judulwhorsip' => $request->judulwhorsip,
                'lokasi' => $request->lokasi,
                'jam' => $request->jam,
                'foto' => $namafoto,
            ]);

        return redirect('admin/whorsip')->with('success', 'Data berhasil ditambahkan');
    }

    public function whorsipedit($id)
    {
        $data['whorsip'] = DB::table('whorsip')
            ->where('idwhorsip', $id)
            ->first();

        return view('admin.whorsipedit', $data);
    }

    public function whorsipeditsimpan(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judulwhorsip' => 'required',
            'foto' => 'nullable|mimes:png,jpg,jpeg,gif,webp,svg|max:5048',
        ]);

        // Data yang akan diperbarui
        $data = [
            'judulwhorsip' => $request->judulwhorsip,
            'lokasi' => $request->lokasi,
            'jam' => $request->jam,
        ];

        if ($request->hasFile('foto')) {
            $oldFoto = DB::table('whorsip')->select('foto')->where('idwhorsip', $id)->first()->foto;

            if (!empty($oldFoto) && file_exists(storage_path('app/public/uploads/' . $oldFoto))) {
                unlink(storage_path('app/public/uploads/' . $oldFoto));
            }

            $foto = $request->file('foto');
            $namafoto = date('YmdHis') . '_' . $foto->getClientOriginalName();
            $foto->storeAs('uploads', $namafoto, 'public');

            $data['foto'] = $namafoto;
        }

        DB::table('whorsip')->where('idwhorsip', $id)->update($data);

        return redirect('admin/whorsip')->with('success', 'Data berhasil diperbarui');
    }

    public function whorsiphapus($id)
    {
        $oldFoto = DB::table('whorsip')->select('foto')->where('idwhorsip', $id)->first()->foto;

        if (!empty($oldFoto) && file_exists(storage_path('app/public/uploads/' . $oldFoto))) {
            unlink(storage_path('app/public/uploads/' . $oldFoto));
        }
        DB::table('whorsip')->where('idwhorsip', $id)->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }

    public function kontak()
    {
        $data['kontak'] = DB::table('kontak')->get();
        return view('admin.kontak', $data);
    }

    public function kontaktambah()
    {
        return view('admin.kontaktambah');
    }

    public function kontaksimpan(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        DB::table('kontak')
            ->insert([
                'email' => $request->email,
                'alamat' => $request->alamat,
            ]);

        return redirect('admin/kontak')->with('success', 'Data berhasil ditambahkan');
    }

    public function kontakedit($id)
    {
        $data['kontak'] = DB::table('kontak')->where('idkontak', $id)->first();
        return view('admin.kontakedit', $data);
    }

    public function kontakeditsimpan(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'alamat' => 'required',
            'nohp' => 'required'
        ]);

        DB::table('kontak')
            ->where('idkontak', $id)
            ->update([
                'email' => $request->email,
                'alamat' => $request->alamat,
                'nohp' => $request->nohp,
            ]);

        return redirect('admin/kontak')->with('success', 'Data berhasil diupdate');
    }

    public function shermon()
    {
        $shermons = Shermon::all();

        return view('admin.shermon', compact('shermons'));
    }

    public function shermontambah()
    {
        return view('admin.shermontambah');
    }

    public function simpanshermontambah(Request $request)
    {
        $validasi = $request->validate([
            'namashermon' => 'required',
            'deskripsishermon' => 'required',
            'tanggalshermon' => 'required',
            'link' => 'required',
        ]);


        // if ($request->hasFile('foto')) {
        //     $foto = $request->file('foto')->getClientOriginalName();
        //     $namafoto = $foto;
        //     $request->file('foto')->storeAs('uploads', $namafoto, 'public');
        // }

        $key = shermon::create([
            'namashermon' => $validasi['namashermon'],
            'deskripsishermon' => $validasi['deskripsishermon'],
            'tanggalshermon' => $validasi['tanggalshermon'],
            'link' => $validasi['link'],
            // 'foto' => $namafoto,
        ]);

        return redirect()->route('shermon')->with('succes', 'Data Berhasil ditambahkan !');
    }

    public function editshermon(int $id)
    {
        $shermons = Shermon::findOrFail($id);
        return view('admin.editshermon', [
            'title' => 'Edit Shermon',
            'shermon' => $shermons,
        ]);
    }

    public function simpaneditshermon(Request $request, $id)
    {
        $shermons = Shermon::findOrFail($id);
        if (!$shermons) {
            return redirect()->back()->with('erorr', 'Shermons Tidak ditemukan!');
        }

        $validasi = $request->validate([
            'namashermon' => 'required',
            'deskripsishermon' => 'required',
            'tanggalshermon' => 'required',
            'link' => 'required',
        ]);

        // if ($request->hasFile('foto')) {
        //     $foto = $request->file('foto');
        //     $namafoto = time() . '_' . $foto->getClientOriginalName();
        //     $foto->storeAs('uploads', $namafoto, 'public');

        //     $shermons->update([
        //         'namashermon'       => $validasi['namashermon'],
        //         'deksripsishermon'  => $validasi['deskripsishermon'],
        //         'tanggalshermono'   => $validasi['tanggalshermon'],
        //         'foto'              => $namafoto,
        //     ]);
        // } else {
        //     $shermons->update([
        //         'namashermon'       => $validasi['namashermon'],
        //         'deksripsishermon'  => $validasi['deskripsishermon'],
        //         'tanggalshermono'   => $validasi['tanggalshermon'],
        //     ]);
        // }
        $shermons->update([
            'namashermon'       => $validasi['namashermon'],
            'deksripsishermon'  => $validasi['deskripsishermon'],
            'tanggalshermon'   => $validasi['tanggalshermon'],
            'link'   => $validasi['link'],
        ]);


        return redirect()->route('shermon')->with('success', 'Berhasil mengupdate data shermons');
    }


    public function hapusshermon(int $id)
    {
        $shermons = Shermon::find($id);
        $shermons->destroy($id);
        return redirect()->route('shermon')->with('success', 'Berhasil menghapus shermon');
    }

    public function prayer()
    {
        $prayer = Prayer::all();
        return view('admin.prayer', [
            'value' => $prayer,
        ]);
    }

    public function prayertambah()
    {
        return view('admin.prayertambah');
    }

    public function simpanrequestprayer(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'nullable|required',
            'phonenumber' => 'nullable|required',
            'hopepray' => 'nullable|required',
            'answerpray' => 'nullable|required',
        ]);

        $Key = Prayer::create([
            'name' => $validasi['name'],
            'phonenumber' => $validasi['phonenumber'],
            'hopepray' => $validasi['hopepray'],
            'answerpray' => $validasi['answerpray'],
        ]);

        return redirect()->route('prayer')->with('success', 'Berhasil menambahkan request prayer');
    }

    public function editprayer(int $id)
    {
        $prayer = Prayer::FindOrFail($id);
        return view('admin.editprayer', [
            'title' => 'Edit Request Prayer',
            'value' => $prayer,
        ]);
    }

    public function editprayersimpan(Request $request, $id)
    {

        $prayer = Prayer::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:20',
            'hopepray' => 'nullable|string',
            'answerpray' => 'nullable|string',
        ]);

        $prayer->update($validatedData);

        return redirect()->route('prayer')->with('success', 'Data Prayer Request berhasil diperbarui!');
    }

    public function hapusprayer(int $id)
    {
        $prayer = Prayer::find($id);
        $prayer->destroy($id);
        return redirect()->route('prayer')->with('success', 'Berhasil menghapus Prayer');
    }
}
