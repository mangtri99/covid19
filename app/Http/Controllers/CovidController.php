<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index()
    {
        # code...
        $url = 'https://kawalcovid19.harippe.id/api/summary';
        $header = array(
            'Accept: application/json',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($ch, CURLOPT_POST, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($result, TRUE);

        $url2 = 'https://covid19.mathdro.id/api/confirmed';
        $header2 = array(
            'Accept: application/json',
        );
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $url2);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HTTPHEADER, $header2);
        //curl_setopt($ch, CURLOPT_POST, 1);
        $result2 = curl_exec($ch2);
        $dataworld = json_decode($result2, TRUE);

        $url3 = 'https://covid19.mathdro.id/api';
        $header3 = array(
            'Accept: application/json',
        );
        $ch3 = curl_init();
        curl_setopt($ch3, CURLOPT_URL, $url3);
        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch3, CURLOPT_HTTPHEADER, $header3);
        //curl_setopt($ch, CURLOPT_POST, 1);
        $result3 = curl_exec($ch3);
        $datacount = json_decode($result3, TRUE);

        // $data2 = json_encode($data, TRUE);
        // return $result;
        // return $data2;
        return view('welcome', ["data"=>$data, "dataworld"=>$dataworld, "datacount"=>$datacount]);
    }

}
