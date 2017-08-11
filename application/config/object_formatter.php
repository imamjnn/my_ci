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
    ),

    'article_category' => array(
        'page' => 'join(/tag/|$slug)',
        'name' => 'text',
        //'parent' => '@parent[article_category]',
        'description' => 'text',
        'created' => 'date'
    )
);