<?php

/** define('NO_SIDEBAR', false); */
include 'view-blocks.php';

drawHeader($options);
drawBody($data, NO_SIDEBAR);
drawFooter($options);
