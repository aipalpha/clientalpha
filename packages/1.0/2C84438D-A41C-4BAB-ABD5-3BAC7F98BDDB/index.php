<?php
 
function main(array $args) : array
{
    $object = array('output' => 'test');
    if (isset($args['name'])) {
        $object['name'] = $args['name'];
    }
 
    return [
        'body' => json_encode($object),
    ];
}
