<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Traits\CryptoTrait;
use App\Http\Controllers\Controller;
use App\Http\Traits\GuzzleHttpTrait;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    use CryptoTrait;
    use GuzzleHttpTrait;
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
        $endpoint = env('BOT_URL') . '/api/guilds/user';
        $servers = $this->get($endpoint, true, [
            'query' => [
                'id' => Auth::user()->discord_id
            ]
        ]);

        $decodedServers = json_decode($servers)->servers;
        $chunk = array_chunk($decodedServers, 3);

        return view('home')->with('servers', $chunk);
    }
}
