<?php

if (function_exists('imap_open')) {
    echo "IMAP functions are available.<br />Å_n";
} else {
    echo "IMAP functions are not available.<br />Å_n";
}

?>