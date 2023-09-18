<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berita;
use Yish\UploadSpeed\UploadFacade as UploadSpeed;

class DashboardController extends Controller
{
    public function index()
    {
        $yourServerURL = 'https://rafii.site';

        $start = microtime(true);
        $ch = curl_init($yourServerURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        $end = microtime(true);
        $responseTime = round(($end - $start) * 100);

        $totalUsers = User::count();
        $title = "Dashboard Panel";
        $users = User::paginate(5);
        $totalBerita = Berita::count();
        return view('dashboard', compact('title', 'totalUsers', 'users', 'totalBerita', 'responseTime'));
    }

}