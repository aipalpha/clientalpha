<?php
 
function main(array $args) : array
{
    print("Received array");
    print($args);
    if (
        !isset($args['sdk']) ||
        !isset($args['installID']) ||
        !isset($args['bundleID']) ||
        !isset($args['appVersion']) ||
        !isset($args['buildVersion']) ||
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
    $osVersion = $args['osVersion'];
    $device = $args['device'];
    $model = $args['model'];
    $locale = $args['locale'];

    
    $object = array(
        'sdkVersion' => $sdkVersion,
        'installID' => $installID,
        'bundleID' => $bundleID,
        'appVersion' => $appVersion,
        'buildVersion' => $buildVersion,
        'osVersion' => $osVersion,
        'device' => $device,
        'model' => $model,
        'locale' => $locale
    );


    if (isset($args['userID'])) {
        $object['userID'] = $args['userID'];
    }
 
    return [
        'body' => json_encode($object),
    ];
}
