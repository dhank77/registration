<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $pendidikan = $this->getApi('https://siasn.sulselprov.go.id/api/kode-pendidikan');
        return view('welcome', compact('pendidikan'));
    }

    public function cekNip()
    {
        $nip = request('nip');
        $url = 'https://siasn.sulselprov.go.id/api/pegawai/detail?nip=' . $nip;
        $output = $this->getApi($url);
        if ($output != null) {
            $output['status'] = true;
            return response()->json($output);
        }else{
            return response()->json(['status' => false]);
        }

    }

    private function getApi($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		$data = curl_exec($ch);

		if (curl_errno($ch)) {
			print "Error: " . curl_error($ch);
		} else {
			$transaction = json_decode($data, TRUE);
			curl_close($ch);
			return $transaction;
		}
	}
}
