<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Prize;
use App\Models\Promo;
use App\Models\RafflePick;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
    public function getUsersList()
    {

        $users = User::all();

        return view('admins.users', compact('users'));
    }

    public function editUser(Request $request)
    {

        $id = $request->id;

        $user = User::where('id', $id)->get();

        return view('admins.users_edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {

        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        if (!is_null($request->password)) {
            $user = User::where('id', $id)->update(
                [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                ]
            );
            return redirect()->route('users.list');
        } else {
            $user = User::where('id', $id)->update(
                [
                    'name' => $name,
                    'email' => $email,
                ]
            );
            return redirect()->route('users.list');
        }


        return dd($request->all());
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.list')->with('success', 'Users has been deleted.');
    }

    public function register(Request $request)
    {
        return view('admins.users_create');
    }

    public function createUser(Request $request)
    {

        $validate = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );

        $user_register = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.list');
    }
}
