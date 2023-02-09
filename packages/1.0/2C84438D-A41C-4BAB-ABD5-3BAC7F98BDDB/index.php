<?php
 
function main(array $args) : array
{
    print("Received array");
    print($array);
    if (
        !isset($array['sdk']) ||
        !isset($array['installID']) ||
        !isset($array['bundleID']) ||
        !isset($array['appVersion']) ||
        !isset($array['buildVersion']) ||
        !isset($array['osVersion']) ||
        !isset($array['device']) ||
        !isset($array['model']) ||
        !isset($array['locale'])
    ) {
        return [
            'statusCode' => 403
        ];    
    }

    $sdkVersion = $array['sdk'];
    $installID = $array['installID'];
    $bundleID = $array['bundleID'];
    $appVersion = $array['appVersion'];
    $buildVersion = $array['buildVersion'];
    $osVersion = $array['osVersion'];
    $device = $array['device'];
    $model = $array['model'];
    $locale = $array['locale'];

    
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
