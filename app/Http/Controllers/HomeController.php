<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Prize;
use App\Models\Promo;
use App\Models\RafflePick;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch statistics
        $totalPromos = Promo::count();
        $totalRafflePicks = RafflePick::count();
        $winningRafflePicks = RafflePick::where('is_winner', 1)->count();
        $totalEntries = Entry::count(); // Count total entries
        $totalPrizes = Prize::count();

        // You can add more statistics as needed

        return view('home', compact('totalPromos', 'totalRafflePicks', 'winningRafflePicks', 'totalEntries', 'totalPrizes'));
    }
}
