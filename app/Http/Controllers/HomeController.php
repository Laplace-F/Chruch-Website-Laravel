<?php

namespace App\Http\Controllers;

use App\Models\Prayer;
use App\Models\Shermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data['whorsip'] = DB::table('whorsip')->orderBy('idwhorsip', 'desc')->limit(3)->get();
        $data['kegiatan'] = DB::table('kegiatan')->orderBy('idkegiatan', 'desc')->limit(3)->get();
        // Fetch latest shermon
        $data['latestShermon'] = DB::table('shermon')->orderBy('tanggalshermon', 'DESC')->limit(1)->get();
        return view('home', $data);
    }

    public function simpanprayer(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'phonenumber' => 'required|max:13',
            'hopepray' => 'required',
            'answerpray' => 'required',
        ]);

        $key = Prayer::create([
            'name' => $validasi['name'],
            'phonenumber' => $validasi['phonenumber'],
            'hopepray' => $validasi['hopepray'],
            'answerpray' => $validasi['answerpray'],
        ]);

        return redirect()->route('index')->with('success', 'Berhasil mengirimkan Request Prayer');
    }

    public function login()
    {
        return view('login');
    }

    public function loginproses(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $role = Auth::user()->role;
            session(['role' => $role]);
            // Redirect ke dashboard atau halaman yang diinginkan
            return redirect()->intended('admin/dashboard')->with('success', 'Berhasil login!');
        } else {
            return back()->with('error', 'The provided credentials do not match our records.');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

    public function event()
    {
        $kegiatan = DB::table('kegiatan')->orderBy('idkegiatan', 'ASC')->paginate(4);
        return view('event', compact('kegiatan'));
    }

    public function eventdetail($id)
    {
        $data = DB::table('kegiatan')->where('idkegiatan', $id)->first();
        return view('eventdetail', compact('data'));
    }

    public function kegiatan()
    {
        $data['kegiatan'] = DB::table('kegiatan')->paginate(6);
        return view('kegiatan', $data);
    }

    public function give()
    {
        return view('give');
    }


    public function kegiatandetail($id)
    {
        $data['kegiatan'] = DB::table('kegiatan')->where('idkegiatan', $id)->first();
        return view('kegiatandetail', $data);
    }

    public function whorsip()
    {
        $data['whorsip'] = DB::table('whorsip')->paginate(6);
        return view('whorsip', $data);
    }

    public function whorsipdetail($id)
    {
        $data = DB::table('whorsip')->where('idwhorsip', $id)->first();
        return view('whorsipdetail', compact('data'));
    }

    public function shermon()
    {
        $data['shermon'] = DB::table('shermon')->paginate(4);
        return view('shermon', $data);
    }

    public function shermondetail($id)
    {
        $data = Shermon::findOrFail($id);

        $ShermonLainnya = Shermon::where('idshermon', '!=', $id)
            ->orderBy('tanggalshermon', 'desc')
            ->limit(5)
            ->get();

        return view('shermondetail', compact('data', 'ShermonLainnya'));
    }


    public function kontak()
    {
        $data['kontak'] = DB::table('kontak')->orderBy('idkontak', 'DESC')->first();
        return view('kontak', $data);
    }
}
