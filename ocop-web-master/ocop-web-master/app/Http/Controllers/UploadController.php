<?php

namespace App\Http\Controllers;
use Config;
use Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function generatePreignedurl(){
        $fileName = Request::input('fileName');
        $type = Request::input('type');

        $s3 = Storage::disk('s3');
        $client = $s3->getDriver()->getAdapter()->getClient();
        $expiry = "+10 minutes";
        //$current_time = \Carbon\Carbon::now()->timestamp;
        $cmd = $client->getCommand('PutObject', [
            'Bucket' => Config::get('app.aws_bucket'),
            'Key' => 'ocop/'.$fileName //'ocop/' . $current_time . '_' . $fileName
            //'ACL' => 'public-read'
        ]);

        $request = $client->createPresignedRequest($cmd, $expiry);

        $presignedUrl = (string)$request->getUri();

        //return response()->json(['url' => $presignedUrl], 201);
        return $presignedUrl;
    }
}
