<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\PushNotificationInterface;
use GuzzleHttp\Client;
use App\Models\Platform;

class PushNotificationRepository implements PushNotificationInterface
{
    private $apiConfig;

    public function __construct()
    {
        $this->apiConfig = [
            'url' => config('firebase.push_url'),
            'server_key' => config('firebase.server_key'),
            'device_type' => config('firebase.device_type')
        ];
    }

    public function all($order)
    {

        
    }

    public function paginate($limit){
        
    }

    public function find($id)
    {
        
    }

    public function send(string $device_token, array $notification, array $data)
    {
        if ($data['device_type'] === $this->apiConfig['device_type']['ios']) {
            $fields = [
                'to'   => $device_token,
                'notification' => $notification,
                'data' => $data
            ];
        } else {
            $fields = [
                'to'   => $device_token,
                'data' => array_merge($data, $notification)
            ];
        }

        return $this->sendPushNotification($fields);
    }

    public function sendMultiple(array $device_tokens, array $notification, array $data)
    {
        $fields = [
            'registration_ids' => $device_tokens,
            'data' => $data,
            'notification' => $notification
        ];

        return $this->sendPushNotification($fields);
    }

    private function sendPushNotification(array $fields)
    {
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'key='. $this->apiConfig['server_key'],
            ]
        ]);
        $res = $client->post(
            $this->apiConfig['url'],
            ['body' => json_encode($fields)]
        );
        // Request api fcm by json data
        // $res = $client->post($this->apiConfig['url'], json_encode($fields), ['type' => 'json']);

        $res = json_decode($res->getBody());
    
        // if ($res->failure) {
        //     Log::error("ERROR_PUSH_NOTIFICATION: ".$fields['to']);
        // }

        return true;
    }

    public function pushNotificationToDevice($to, $title, $body, $message, $type){
        $url = $this->apiConfig['url'];
        $serverKey = $this->apiConfig['server_key'];
        $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1', 'click_action' => 'FLUTTER_NOTIFICATION_CLICK');
        $data = array('title' =>$title , 'message' => $message, 'click_action' => 'FLUTTER_NOTIFICATION_CLICK');
        $arrayToSend = array('to' => $to, 'notification' => $notification,'priority'=>'high', 'data' => $data, 'click_action' => 'FLUTTER_NOTIFICATION_CLICK');
        
        $json = json_encode($arrayToSend);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key='. $serverKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Send the request
        $response = curl_exec($ch);
        //Close request
        /*
        if ($response === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
        }
        */
        curl_close($ch);
    }

    public function pushNotificationToMultipleDevice($to, $title, $body, $message, $type){
        $url = $this->apiConfig['url'];
        $serverKey = $this->apiConfig['server_key'];
        $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1','click_action' => 'FLUTTER_NOTIFICATION_CLICK');
        $data = array('title' =>$title , 'message' => $message, 'click_action' => 'FLUTTER_NOTIFICATION_CLICK');
        $arrayToSend = array('registration_ids' => $to, 'notification' => $notification,'priority'=>'high', 'data' => $data,'click_action' => 'FLUTTER_NOTIFICATION_CLICK');
        
        $json = json_encode($arrayToSend);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key='. $serverKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Send the request
        $response = curl_exec($ch);
        //Close request
        /*
        if ($response === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
        }
        */
        curl_close($ch);
    }

    public function getDeviceTokens($userIds){
        $results = Platform::whereIn('user_id',$userIds)->pluck('device_token')->toArray();
        return $results;
    }


}
