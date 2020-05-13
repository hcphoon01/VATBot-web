<?php
namespace App\Http\Traits;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Auth;

trait GuzzleHttpTrait {

    /**
     * Sends a get request to a known endpoint
     *
     * @param string $endpoint
     * @param array|null $data
     * @return \Illuminate\Http\Response
     */
    public function get($endpoint, $authorization, $data)
    {
        $headers = [
            'Authorization' => session()->get('encrypted_discord_token')
        ];

        if ($authorization) {
            $data['headers'] = $headers;
        }

        $client = new Client();
        try {
            $res = $client->request('GET', $endpoint, $data);
            return $res->getBody()->getContents();
        } catch (RequestException $e) {
            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    $this->unauthorized();
                    break;
                
                default:
                    $this->unauthorized();
                    break;
            }
        }
    }
    
    public function post($endpoint, $authorization, $data)
    {
        $headers = [
            'Authorization' => session()->get('encrypted_discord_token')
        ];
        
        if ($authorization) {
            $data['headers'] = $headers;
        }

        $client = new Client();
        $res = $client->post($endpoint, $data);
        return $res;
    }

    private function unauthorized()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('login.discord');
    }
}