<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-08-11
 * Time: 15:47
 */

readline_completion_function('your_callback');

function your_callback($input, $index) {
    // Get info about the current buffer
    $rl_info = readline_info();

    // Figure out what the entire input is
//    $full_input = substr($rl_info['line_buffer'], 0, $rl_info['end']);

    //var_dump($input, $index, $rl_info);die;
    $matches = array();

    // Get all matches based on the entire input buffer
    foreach (['df', 'df-af', 'df-bb'] as $phrase) {
        // Only add the end of the input (where this word begins)
        // to the matches array
        //$matches[] = substr($phrase, $index);
        $matches[] = $phrase;
    }

    return $matches;
}

$ret  = readline('>>');

if ($ret) {
    readline_add_history($ret);
    echo "Your input: $ret\n";
} else {
    echo "NO INPUT\n";
}

