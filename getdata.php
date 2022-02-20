<?php

$val = $_GET['selectvalue'];

$state1 = array('New Delhi','Andhra pradesh' , 'Haryana', 'Manipur' , 'Sikkim', 'Arunachal Pradesh' ,
 'Himachal Pradesh' , 'Meghalya', 'Tamil Nadu' , 'Assam' , 'Jharkhand', 'Mizoram', 'Telangana', 'Bihar', 'Karnataka', 'Nagaland', 
	'Chattisgarh', 'Kerala', 'Odisa', 'Uttrakhand', 'Goa', 'Mandhya pradesh', 'Punjab', 'Uttar Pradesh' ,'Gujrat', 'Maharastra',
	'Rajasthan' , 'West Bangal');

$state2 = array('England' , 'Blackpool', 'Blackburn' , 'Bournemouth', 'Bristol'); 

$state3 = array('Alabama' , 'Alaska', 'Arizona' , 'Arkansas', 'California'); 


$state4 = array('Adygeya' , 'Altay', 'Bashkortostan' , 'Chukotka', 'Ivanovo'); 


switch($val){
	case 'India' : foreach($state1 as $statevalue){
		echo "<option> $statevalue</option>";
	}
	break;

	case 'Usa' : foreach($state2 as $statevalue){
		echo "<option> $statevalue</option>";
	}
	break;

	case 'Uk' : foreach($state3 as $statevalue){
		echo "<option> $statevalue</option>";
	}
	break;

	
	case 'Russia' : foreach($state4 as $statevalue){
		echo "<option> $statevalue</option>";
	}
	break;
	default : "States not selected";
}
?>