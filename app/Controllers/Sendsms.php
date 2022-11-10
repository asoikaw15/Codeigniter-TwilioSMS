<?php
namespace App\Controllers;
use Twilio\Rest\Client;
require_once 'C:\Users\Admin\Desktop\Folders\kervy-ci\appstarter\vendor\autoload.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Sendsms extends BaseController
{
    public function index()
    {

        return view('sendsms');
    }
    public function message_sent()
    {

        $message = $_POST['message'];
        $number = $_POST['number'];
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = $_ENV['account_sid'];
        $auth_token = $_ENV['auth_token'];
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
        // A Twilio number you own with SMS capabilities
        $twilio_number = $_ENV['twilio_number'];

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
        // Where to send a text message (your cell phone?)
        $receiver = $number,
    array(
        'from' => $twilio_number,
        'body' => $message
    )
    );
    echo('message sent!');
    }
}

