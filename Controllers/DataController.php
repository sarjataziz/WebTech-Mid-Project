<?php  
include '../Models/Model.php';

function loadData(){
    return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../Models/User.json', $final_data))  
        {  
            header("location:../View/load.php");
        }  

}
function studentInfo($data){

$all_data = readData();
    foreach($all_data as $row)  {
        if ($row['name']==$data) {
            $d_data = array(
                'name' => $row['name'],
                'email' => $row['email'],
                'username' => $row['username'],
            );
        return $d_data;
        }
    }

}

?>