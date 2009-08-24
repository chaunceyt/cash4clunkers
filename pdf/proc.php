<?php
mysql_connect('localhost','root','password');
mysql_select_db('test_db');

$files = file('ELVS.txt');
foreach($files as $file) {
    preg_match('/^\s*(.+?)\s{2,}(.+?)\s{2,}(.+?) (..) (\d{5})\s{2,}(\d+)$/s', $file, $matches);
    if(!empty($matches[2]) && !empty($matches[3])) {
    $sql = "INSERT INTO salvageyards (id, name, address, city, state, zip, uniqueid)
            VALUES ('',
                    '".$matches[1]."',
                    '".$matches[2]."',
                    '".$matches[3]."',
                    '".$matches[4]."',
                    '".$matches[5]."',
                    '".$matches[6]."')";
     mysql_query($sql);       
    } 
}
