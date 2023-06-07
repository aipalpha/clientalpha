<?php
 
function main(array $args) : array
{
    if (
        !isset($args['sdk']) ||
        !isset($args['installID']) ||
        !isset($args['bundleID']) ||
        !isset($args['appVersion']) ||
        !isset($args['buildVersion']) ||
        !isset($args['platform']) ||
        !isset($args['osVersion']) ||
        !isset($args['device']) ||
        !isset($args['model']) ||
        !isset($args['locale'])
    ) {
        return [
            'statusCode' => 403
        ];    
    }

    $sdkVersion = $args['sdk'];
    $installID = $args['installID'];
    $bundleID = $args['bundleID'];
    $appVersion = $args['appVersion'];
    $buildVersion = $args['buildVersion'];
    $platform = $args['platform'];
    $osVersion = $args['osVersion'];
    $device = $args['device'];
    $model = $args['model'];
    $locale = $args['locale'];

    $endpoint = 'http://127.0.0.1:8123/events';

    $object = array(
        'enabled' => true,
        'endpoint' => $endpoint,
        'source' => '543665E1-38AE-4251-B5C8-B5337733D4E5',
        'channel' => 'test_chat',
        'batch' => 10,
        'minFreq' => 0,
        'maxFreq' => 10
    );


    if (isset($args['userID'])) {
        $object['userID'] = $args['userID'];
    }
 
    return [
        'body' => json_encode($object),
    ];
}
