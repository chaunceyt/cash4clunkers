<?php
$states = array(
'AL'=>'ALABAMA',
'AK'=>'ALASKA',
'AZ'=>'ARIZONA',
'AR'=>'ARKANSAS',
'CA'=>'CALIFORNIA',
'CO'=>'COLORADO',
'CT'=>'CONNECTICUT',
'DE'=>'DELAWARE',
'DC'=>'DISTRICT OF COLUMBIA',
'FL'=>'FLORIDA',
'GA'=>'GEORGIA',
'HA'=>'HAWAII',
'ID'=>'IDAHO',
'IL'=>'ILLINOIS',
'IN'=>'INDIANA',
'IA'=>'IOWA',
'KS'=>'KANSAS',
'KY'=>'KENTUCKY',
'LA'=>'LOUISIANA',
'ME'=>'MAINE',
'MD'=>'MARYLAND',
'MA'=>'MASSACHUSETTS',
'MI'=>'MICHIGAN',
'MN'=>'MINNESOTA',
'MS'=>'MISSISSIPPI',
'MO'=>'MISSOURI',
'MT'=>'MONTANA',
'NE'=>'NEBRASKA',
'NV'=>'NEVADA',
'NH'=>'NEW HAMPSHIRE',
'NJ'=>'NEW JERSEY',
'NM'=>'NEW MEXICO',
'NY'=>'NEW YORK',
'NC'=>'NORTH CAROLINA',
'ND'=>'NORTH DAKOTA',
'OH'=>'OHIO',
'OK'=>'OKLAHOMA',
'OR'=>'OREGON',
'PA'=>'PENNSYLVANIA',
'RI'=>'RHODE ISLAND',
'SC'=>'SOUTH CAROLINA',
'SD'=>'SOUTH DAKOTA',
'TN'=>'TENNESSEE',
'TX'=>'TEXAS',
'UT'=>'UTAH',
'VT'=>'VERMONT',
'VA'=>'VIRGINIA',
'WA'=>'WASHINGTON',
'WV'=>'WEST VIRGINIA',
'WI'=>'WISCONSIN',
'WY'=>'WYOMING');

$_states = array();

$dbconn = mysql_connect('localhost','root','password');
if($dbconn) {
    mysql_select_db('test_db') or die('ERROR: ' . mysql_error());;
}



foreach($states as $key => $_state_long) {

    $url = 'http://www.cars.gov/dealer-locator/by-state/'.$key;
    $response = file_get_contents($url);
    preg_match('#<table width="100%" class="results-table">(.+?)</table>#is', $response, $table);
    preg_match_all('#<tr class="row">(.+?)<\/tr>#is', $table[1], $tr);

    $dealerships = array();

    $i=0;
    foreach($tr[1] as $tr_rows) {
        preg_match_all('#<td[^>]*>(.+?)<\/td>#is', $tr_rows, $td);
        $dealerships[$i]['dealername'] = trim($td[1][0]);
        list($address, $city, $state, $zip) = explode('<br />', trim($td[1][1]));
        $dealerships[$i]['address'] = trim($address);
        $dealerships[$i]['city'] = trim($city);
        $dealerships[$i]['state'] = trim($state);
        $dealerships[$i]['zip'] = trim($zip);
        $dealerships[$i]['phone'] = trim($td[1][2]);
        $i++;
    }
    $_state_arr[$key] = array_merge($dealerships, $_states);
}

foreach($_state_arr as $state_str) {
    foreach($state_str as $state) {
        $sql = "INSERT INTO dealerships (id, dealername, address, city, state, zip, phone)
                VALUES ('',
                        '".$state['dealername']."',
                        '".$state['address']."',
                        '".$state['city']."',
                        '".$state['state']."',
                        '".$state['zip']."',
                        '".$state['phone']."')";
        mysql_query($sql);
    }
}
