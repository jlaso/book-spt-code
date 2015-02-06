<?php

function renderView($viewFile, $options)
{
    $template = file_get_contents ($viewFile);
    echo processTags($template, $options);
}

function processTags($template, $options = array())
{
    $found = preg_match_all("/{{(.*)}}/", $template, $matches, PREG_SET_ORDER); if($found){
    foreach($matches as $match){
        $var = trim($match[1]);
        if(!isset($options[$var])){
            throw new Exception('Variable ' . $var . ' no existe'); }
        $template = str_replace($match[0], $options[$var], $template); }
    }

    return $template;
}


// Y la invocaríamos así:
renderView('demo.template', array(
    'title'   => 'mi web',
    'content' => 'Aquí va el contenido de mi primer div',
    'div_id'  => 'main',
) );