<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function upload_img($path = null, $image = null) {

        $res = array("error" => true, 'msg' => 'Unable to upload.');
        try {
            list($type, $image) = explode(';', $image);
            list(, $extension) = explode('/', $type);
            list(, $image) = explode(',', $image);
            $fileName = uniqid() . $this->generateRandomString() . '.' . $extension;
            $image = base64_decode($image);
            file_put_contents($path . $fileName, $image);
            $res['error'] = false;
            $res['msg'] = '';
            $res['name'] = $fileName;
        } catch (Exception $e) {
        }
        return $res;
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
