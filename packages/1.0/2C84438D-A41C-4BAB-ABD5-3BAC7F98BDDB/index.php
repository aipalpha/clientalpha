<?php
 
function main(array $args) : array
{
    $object = array('output' => 'test');
 
    return [
        'body' => json_encode($object),
    ];
}
