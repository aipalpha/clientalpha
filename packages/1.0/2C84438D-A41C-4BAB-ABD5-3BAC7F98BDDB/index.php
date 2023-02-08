<?php
 
function main(array $args) : array
{
    $json = file_get_contents('php://input');
    // Converts it into a PHP object
    $data = json_decode($json);

    $object = array('output' => 'test');
    if (isset($args['name'])) {
        $object['name'] = $args['name'];
    }
    if (isset($data['form'])) {
        $object['form'] = $data['form'];
    }
    if (isset($args['post'])) {
        $object['post'] = $args['post'];
    }
 
    return [
        'body' => json_encode($object),
    ];
}
