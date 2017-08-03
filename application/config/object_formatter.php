<?php

$config['object_formatter'] = array(

    'demo' => array(
        'photo' => 'media',
        'description' => 'text',
        'created' => 'date'
    ),

    'article' => array(
        'page' => 'join(/read/|$id|/|$slug|)',
        'title' => 'text',
        'content' => 'text',
        'avatar' => 'media',
        'created' => 'date'
    )
);