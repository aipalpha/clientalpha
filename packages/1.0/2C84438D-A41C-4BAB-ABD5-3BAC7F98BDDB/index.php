<?php
 
function main(array $args) : array
{
    $object = array('output' => 'test');
    if (isset($args['name'])) {
        $object['name'] = $args['name'];
    }
    if (isset($args['form'])) {
        $object['form'] = $args['form'];
    }
 
    return [
        'body' => json_encode($object),
    ];
}
