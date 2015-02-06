<?php

$hdl = mysqli_connect('localhost', 'user', 'password', 'db_test');

mysqli_query($hdl, <<<EOD
CREATE TABLE IF NOT EXISTS `student` (
    `id` int(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(100) NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
EOD
);

$rows = mysqli_query( $hdl, 'SELECT * FROM `student`'); while ($row = $rows->fetch_assoc()){
print sprintf ('%06d | %30s' . PHP_EOL, $row['id'], $row['name']); }
