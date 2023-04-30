<?php
namespace App\Repositories\Contracts;

interface PushNotificationInterface extends BaseRepositoryInterface
{
    public function pushNotificationToDevice($to, $title, $body, $message, $type);
    public function pushNotificationToMultipleDevice($to, $title, $body, $message, $type);
    public function send(string $device_token, array $notification, array $data);
    public function sendMultiple(array $device_tokens, array $notification, array $data);
    public function getDeviceTokens($userIds);

}