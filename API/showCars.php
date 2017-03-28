<?php
$sData = $_POST["data"];
// $sData = '{"mark":"audi","model":"a4","transmission":"manual"}';
$sDataFromCarList = file_get_contents("../JSON/Cars.json");
$jRequest = json_decode($sData);
$aOfJCars = json_decode($sDataFromCarList);
for($i = 0; $i < count($aOfJCars) ; $i++){
	// var_dump($aOfJCars[$i]);
	foreach ($aOfJCars[$i] as $key => $value) {
		// var_dump($key);
		foreach ($jRequest as $searchKey => $searchValue) {
			if($key == $searchKey){
				if($value != $searchValue){
					unset($aOfJCars[$i]);
				}
			};
		};
	};
};
$sAOfCars = json_encode($aOfJCars);
echo $sAOfCars;
?>