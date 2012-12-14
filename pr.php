<?php

/**
 * pr - The ultimate debug function
 * 
 * @author Sebastian Sommer <mail@sebastian-sommer.com>
 * @author Steffen Mächtel <mail@meffen.de>
 */
function pr($value, $varDump = false) {
    if ($varDump === false) {
        $message = print_r($value, true);
    } else {
        $message = var_dump($value);
    }

    echo '<pre style="margin: 10px; padding: 10px; border: 1px solid red;">' . $message . '</pre>';

    if (count(ob_list_handlers())) {
        ob_flush();
    }
}