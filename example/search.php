<?php
$q = $_POST['data']['q'];

$states = array(
	'Alabama',
	'Alaska',
	'Arizona',
	'Arkansas',
	'California',
	'Colorado',
	'Connecticut',
	'Delaware',
	'District of Columbia',
	'Florida',
	'Georgia',
	'Hawaii',
	'Idaho',
	'Illinois',
	'Indiana',
	'Iowa',
	'Kansas',
	'Kentucky',
	'Louisiana',
	'Maine',
	'Maryland',
	'Massachusetts',
	'Michigan',
	'Minnesota',
	'Mississippi',
	'Missouri',
	'Montana',
	'Nebraska',
	'Nevada',
	'New Hampshire',
	'New Jersey',
	'New Mexico',
	'New York',
	'North Carolina',
	'North Dakota',
	'Ohio',
	'Oklahoma',
	'Oregon',
	'Pennsylvania',
	'Puerto Rico',
	'Rhode Island',
	'South Carolina',
	'South Dakota',
	'Tennessee',
	'Texas',
	'Utah',
	'Vermont',
	'Virginia',
	'Virgin Islands',
	'Washington',
	'West Virginia',
	'Wisconsin',
	'Wyoming'
);

$results = array();
$custom_attribute =array("data-first"=>"custome1","data-sec"=>"custom_two","data-third"=>"Custom-three");
foreach($states as $i => $state){
	if( stripos($state,$q) === 0 ){
		if(isset($custom_attribute)){
			$results[] = array('id' => $i, 'text' => $state,"Custom"=>$custom_attribute);
		}else {
			$results[] = array('id' => $i, 'text' => $state);
		}
	}
}

echo json_encode(array('q' => $q, 'results' => $results));
?>