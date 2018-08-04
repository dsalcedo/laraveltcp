<?php

namespace App\Libreria\Aws;

use Aws\Sdk;
use Aws\Exception\AwsException;
use Aws\Credentials\Credentials;
use Illuminate\Support\Facades\Config;
use Aws\Lambda\LambdaClient;

class Aws {

    public $sdk;

    public function __construct()
    {
        $this->sdk = new Sdk(Config::get('aws'));
    }

    public function lambda()
    {
        $aws = new LambdaClient(Config::get('aws'));
        $client = $aws->createClient();

        $result = $client->invoke([
            'FunctionName' => 'HelloWorld',
            'InvocationType' => 'RequestResponse',
            'LogType' => 'Tail',
            'Payload' => [
                'demo' => true
            ],
        ]);


        //echo json_decode((string) $result->get('Payload'));
        return $result->get('Payload');

    }
}