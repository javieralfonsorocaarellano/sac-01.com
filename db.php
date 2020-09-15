<?php
$action = $_POST["action"];
if(!$action){
$action = $_GET["action"];
}
switch ($action) {
    case 'login':
        login();
	break;
    case 'online':
        online();
	break;
    case 'workflow':
        workflow();
	break;
   case 'offline':
        offline();
	break;
   case 'listreq':
        listreq();
	break;
   case 'sendinternalchat':
        sendinternalchat();
	break;
   case 'listchatscompanies':
        listchatscompanies();
	break;
   case 'listchatsdates':
        listchatsdates();
	break;
   case 'listreqschedules':
        listreqschedules();
	break;
   case 'listchatsconversations':
        listchatsconversations();
	break;
    case 'verifycall':
        verifycall();
	break;
    case 'sendrequisition':
        sendrequisition();
	break;
    case 'schedulesraw':
        schedulesraw();
	break;
    case 'sendschedule':
        sendschedule();
	break;
    case 'sendemail':
        sendemail();
	break;
    case 'recruitment':
        recruitment();
	break;
    case 'requisition':
        requisition();
	break;
    case 'search':
        search();
	break;
    case 'askforjob':
        askforjob();
	break;
    case 'reportperdate':
        reportperdate();
	break;
    case 'verifyschedule':
        verifyschedule();
	break;
    case 'listtypeofcall':
        listtypeofcall();
	break;
    case 'performancereport':
        performancereport();
	break;
    case 'performancereportone':
        performancereportone();
	break;
    case 'typeofcall':
        typeofcall();
	break;
   case 'typeofcalltwo':
        typeofcalltwo();
	break;
    case 'forecastreport':
        forecastreport();
	break;
    case 'listevaluations':
        listevaluations();
	break;
    case 'qareport':
        qareport();
	break;
    case 'qareportcharts':
        qareportcharts();
	break;
    case 'cumulativereport':
        cumulativereport();
	break;
    case 'answerthecall':
        answerthecall();
	break;
    case 'dropcall':
        dropcall();
	break;
    case 'closecall':
        closecall();
	break;
    case 'assigntask':
        assigntask();
	break;
    case 'deleteupdatemessage':
        deleteupdatemessage();
	break;
    case 'hireemployee':
        hireemployee();
	break;
    case 'nothireemployee':
        nothireemployee();
	break;
    case 'resolvetask':
        resolvetask();
	break;
    case 'listcompanies':
        listcompanies();
	break;
    case 'messages':
        messages();
	break;
    case 'chats':
        chats();
	break;
    case 'sendchat':
        sendchat();
        break;
    case 'register':
        register();
	break;
    case 'senddata':
        senddata();
	break;
    case 'addnode':
        addnode();
        break;
    case 'deletenode':
        deletenode();
	break;
    case 'winprompt':
        winprompt();
        break;


   }



function winprompt(){
	
$parent  = $_POST["parent"];
$parent2 = $_POST["parent2"];
$parent3 = $_POST["parent3"];
$parent4 = $_POST["parent4"];
$parent5 = $_POST["parent5"];
$parent6 = $_POST["parent6"];
$parent7 = $_POST["parent7"];
$parent8 = $_POST["parent8"];
$parent9 = $_POST["parent9"];
$parent10 = $_POST["parent10"];

$index = $_POST["index"];
$level = $_POST["level"];
$node = $_POST["node"];
$id = $_POST["id"];
$companyid = $_POST["companyid"];
$accwin = $_POST["accwinexpand"];
$leaf = $_POST["type"];
$winprompt = $_POST["winprompt"];



if(!$level){
$level = 0;
}   

if(!$index){
$index = 0;
} 

if($winprompt === 'false'){
$winprompt = true;
} else {
$winprompt = false;
}


if($accwin === 'informacion'){
$jsonString = file_get_contents('intranet/information-' . $companyid  .  '.json');
}

if($accwin === 'reclamos'){
$jsonString = file_get_contents('intranet/reclamos-' . $companyid  .  '.json');
}

if($accwin === 'gestiones'){
$jsonString = file_get_contents('intranet/management-' . $companyid  .  '.json');
}


$data = json_decode($jsonString, true);

switch ($level) {
    case 0:
	$data[$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
    case 1:
	$data[$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
    case 2:
	$data[$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 3:
	$data[$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 4:
	$data[$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 5:
	$data[$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 6:
	$data[$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 7:
	$data[$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 8:
	$data[$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 9:
	$data[$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 10:
	$data[$parent9]["children"][$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
     case 11:
	$data[$parent10]["children"][$parent9]["children"][$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["winprompt"] = $winprompt; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;

      case $level >= 11:
        echo stripslashes(json_encode(array(
		"success" => false
	)));
        break;


   }

	
$newJsonString = json_encode(array_values($data));
if($accwin === 'informacion'){
file_put_contents('intranet/information-' . $companyid  .  '.json', $newJsonString);
}

if($accwin === 'reclamos'){
file_put_contents('intranet/reclamos-' . $companyid  .  '.json', $newJsonString);
}

if($accwin === 'gestiones'){
file_put_contents('intranet/management-' . $companyid  .  '.json', $newJsonString);
}




}


function deletenode(){
	
$parent  = $_POST["parent"];
$parent2 = $_POST["parent2"];
$parent3 = $_POST["parent3"];
$parent4 = $_POST["parent4"];
$parent5 = $_POST["parent5"];
$parent6 = $_POST["parent6"];
$parent7 = $_POST["parent7"];
$parent8 = $_POST["parent8"];
$parent9 = $_POST["parent9"];
$parent10 = $_POST["parent10"];

$index = $_POST["index"];
$level = $_POST["level"];
$companyid = $_POST["companyid"];
$accwin = $_POST["accwinexpand"];


if(!$level){
$level = 0;
}   

if(!$index){
$index = 0;
} 

if($accwin === 'informacion'){
$jsonString = file_get_contents('intranet/information-' . $companyid  .  '.json');
}

if($accwin === 'reclamos'){
$jsonString = file_get_contents('intranet/reclamos-' . $companyid  .  '.json');
}

if($accwin === 'gestiones'){
$jsonString = file_get_contents('intranet/management-' . $companyid  .  '.json');
}

$data = json_decode($jsonString, true);

switch ($level) {
    case 1:
	unset($data[$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
    case 2:
	unset($data[$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 3:
	unset($data[$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 4:
	unset($data[$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 5:
	unset($data[$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 6:
	unset($data[$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 7:
	unset($data[$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 8:
	unset($data[$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 9:
	unset($data[$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 10:
	unset($data[$parent9]["children"][$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
     case 11:
	unset($data[$parent10]["children"][$parent9]["children"][$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]); 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;

      case $level >= 11:
        echo stripslashes(json_encode(array(
		"success" => false
	)));
        break;


   }

	
$newJsonString = json_encode(array_values($data));
if($accwin === 'informacion'){
file_put_contents('intranet/information-' . $companyid  .  '.json', $newJsonString);
}

if($accwin === 'reclamos'){
file_put_contents('intranet/reclamos-' . $companyid  .  '.json', $newJsonString);
}

if($accwin === 'gestiones'){
file_put_contents('intranet/management-' . $companyid  .  '.json', $newJsonString);
}

}



function addnode(){
	
$parent  = $_POST["parent"];
$parent2 = $_POST["parent2"];
$parent3 = $_POST["parent3"];
$parent4 = $_POST["parent4"];
$parent5 = $_POST["parent5"];
$parent6 = $_POST["parent6"];
$parent7 = $_POST["parent7"];
$parent8 = $_POST["parent8"];
$parent9 = $_POST["parent9"];
$subtree = $_POST["subtree"];
$thirdtree = $_POST["thirdtree"];
$fourtree = $_POST["fourtree"];
$fivetree = $_POST["fivetree"];
$sixtree = $_POST["sixtree"];
$seventree = $_POST["seventree"];
$eighttree = $_POST["eighttree"];
$ninetree = $_POST["ninetree"];
$tentree = $_POST["tentree"];
$eleventree = $_POST["eleventree"];


$index = $_POST["index"];
$level = $_POST["level"];
$node = $_POST["node"];
$id = $_POST["id"];
$companyid = $_POST["companyid"];
$accwin = $_POST["accwinexpand"];
$leaf = $_POST["type"];


if(!$level){
$level = 0;
}   

if(!$index){
$index = 0;
} 

$jsondata->text = $node;
$jsondata->level = $level;
$jsondata->companyid = $companyid;
$jsondata->tree = $accwin;
if($subtree){
$jsondata->subtree = $subtree;
}
if($thirdtree){
$jsondata->thirdtree = $thirdtree;
}
if($fourtree){
$jsondata->fourtree = $fourtree;
}
if($fivetree){
$jsondata->fivetree = $fivetree;
}
if($sixtree){
$jsondata->sixtree = $sixtree;
}
if($seventree){
$jsondata->seventree = $seventree;
}
if($eighttree){
$jsondata->eighttree = $eighttree;
}
if($ninetree){
$jsondata->ninetree = $ninetree;
}
if($tentree){
$jsondata->tentree = $tentree;
}
if($eleventree){
$jsondata->eleventree = $eleventree;
}
$jsondata->expanded = false;
$jsondata->children = []; 
$jsondata->type = $accwin;
$jsondata->leaf = false;
$jsondata->winprompt = false;

if($accwin === 'informacion'){
$jsonString = file_get_contents('intranet/information-' . $companyid  .  '.json');
}

if($accwin === 'reclamos'){
$jsonString = file_get_contents('intranet/reclamos-' . $companyid  .  '.json');
}

if($accwin === 'gestiones'){
$jsonString = file_get_contents('intranet/management-' . $companyid  .  '.json');
}

$data = json_decode($jsonString, true);

switch ($level) {
    case 0:
        $jsondata->iconCls = "icon-grid";
	$data[] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
    case 1:
        $jsondata->iconCls = "appadd";
	$data[$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
	break;
    case 2:
        $jsondata->iconCls = "registerform";
	$data[$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 3:
        $jsondata->iconCls = "thirdcls";
	$data[$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 4:
        $jsondata->iconCls = "fourcls";
	$data[$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
    case 5:
        $jsondata->iconCls = "fivecls";
	$data[$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 6:
        $jsondata->iconCls = "sixcls";
	$data[$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 7:
        $jsondata->iconCls = "sevencls";
	$data[$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 8:
        $jsondata->iconCls = "eightcls";
	$data[$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 9:
        $jsondata->iconCls = "ninecls";
	$data[$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
     case 10:
	$jsondata->iconCls = "tencls";
	$data[$parent9]["children"][$parent8]["children"][$parent7]["children"][$parent6]["children"][$parent5]["children"][$parent4]["children"][$parent3]["children"][$parent2]["children"][$parent]["children"][$index]["children"][] = $jsondata; 
        echo stripslashes(json_encode(array(
		"success" => true
	)));
        break;
      case $level >= 10:
        echo stripslashes(json_encode(array(
		"success" => false
	)));
        break;


   }

	
$newJsonString = json_encode(array_values($data));
if($accwin === 'informacion'){
file_put_contents('intranet/information-' . $companyid  .  '.json', $newJsonString);
}

if($accwin === 'reclamos'){
file_put_contents('intranet/reclamos-' . $companyid  .  '.json', $newJsonString);
}

if($accwin === 'gestiones'){
file_put_contents('intranet/management-' . $companyid  .  '.json', $newJsonString);
}


}

function senddata(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$calltype = $_POST["calltype"];
$data = $_POST["data"];
$user = $_POST["user"];
$companyid = $_POST["companyid"];
$date = $_POST["date"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert senddata (date, obj) values('$date', json_object('calltype', '$calltype','data', '$data','user', '$user', 'companyid','$companyid','status', 'pendiente'));";

$result = $conn->query($sql);

if(!$result){
$conn->close();

	echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$conn->close();

echo stripslashes(json_encode(array(
		"success" => true
	)));
    




};


}



function register(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$name = $_POST["name"];
$description = $_POST["description"];
$email = $_POST["email"];
$key = $_POST["key"];
$account = $_POST["account"];
$country = $_POST["country"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select id from accounts where obj->>'$.email' = '$email'";

$result = $conn->query($sql);

if(!$result){
$conn->close();

	echo stripslashes(json_encode(array(
		"success" => false,
		"error" => $conn -> error
	)));


} else {
if ($result->num_rows > 0) {
$conn->close();

echo stripslashes(json_encode(array(
		"success" => false
	)));

} else {

$sql = "insert into accounts (obj) VALUES(json_object('name', '$name', 'description', '$description', 'email', '$email', 'key', '$key', 'account', '$account', 'country', '$country', 'jobs', 0, 'salary', '1 quetzal por cada llamada'));";

$result = $conn->query($sql);

if(!$result){
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false,
		"error" => $conn -> error
	)));


} else {
$conn->close();

echo stripslashes(json_encode(array(
		"success" => true
	)));
    

 }
}
}
};

function schedulesraw(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$accountid = $_GET["accountid"];
$id = $_GET["id"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;

$sql = "select obj->>'$.schedules' as schedules  from requisition where obj->>'$.accountid' = '$accountid' and id= '$id';";
$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $objs->data = json_decode($row["schedules"]);

    }
 
  
$conn->close();
echo json_encode($objs);

  }
  

 }


};


function chats(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$accountid = $_GET["accountid"];
$id = $_GET["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;

$sql = "select obj->>'$.chats' as chats  from chats where obj->>'$.accountid' = '$accountid' and id= '$id';";

$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $objs->data = json_decode($row["chats"]);

    }
 
  
$conn->close();
echo json_encode($objs);

  }
  

 }


};

function offline(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$iduser = $_POST["iduser"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "update accounts set obj = json_set(obj, '$.status', 'offline') where id = '$iduser';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}
};


function dropcall(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$chatdate = $_POST["chatdate"];
$id = $_POST["id"];
$iduser = $_POST["iduser"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "update employees set obj = json_set(obj, '$.status', 'online') where obj->>'$.id' = '$iduser';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "delete from messages where obj->>'$.id' = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

}
}
};
 
function sendemail(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$to = $_POST["forwhom"];
$email = $_POST["email"];
$id = $_POST["id"];

$subject = 'contact center digital - seguimiento';
$headers = 'From: saccom@sac-01.com' . "\r\n" .
    'Reply-To: saccom@sac-01.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $email, $headers);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
      $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} 


    
$sql = "update senddata set obj = json_set(obj, '$.forwhom', '$to', '$.email', '$email') where id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

}
};

function resolvetask(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$id = $_POST["id"];
$userid = $_POST["userid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    
$sql = "update senddata set obj = json_set(obj, '$.status', 'solved', '$.solved', '$userid') where id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

} 

};

function nothireemployee(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$id = $_POST["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    
$sql = "update accounts set obj = json_set(obj, '$.account', 'usuario normal', '$.status', 'no contratado') where id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$sql = "insert into messages (obj) values(json_object('iduser', '$id', 'messages', 'nothire'))";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

}
       
}

};


function hireemployee(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$id = $_POST["id"];
$requisition = $_POST["requisition"];
$index = $_POST["index"];
$date = $_POST["date"];
$schedule = $_POST["schedule"];
$schedulestarttime = $_POST["schedulestarttime"];
$scheduleendtime = $_POST["scheduleendtime"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

} 

$sql = "set @b = concat('$.schedules[', '$index', '].used');";
$result = $conn->query($sql);

$sql = "set @c = concat('$.schedules[', '$index', '].quantity');";
$result = $conn->query($sql);


$sql = "set @r = concat('select obj->>', quote(@b) , ' as used ', ', obj->>', quote(@c), ' as quantity  from requisition');";
$result = $conn->query($sql);

$sql = "prepare myquery from @r;";
$result = $conn->query($sql);

$sql = "execute myquery;";
$result = $conn->query($sql);



if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
if($contatos[0]["used"] < $contatos[0]["quantity"]){
$sql = "update requisition set obj = json_replace(obj, CONCAT('$.schedules[', '$index', '].used'), json_extract(obj, CONCAT('$.schedules[', '$index', '].used'))+1) where id = '$requisition';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "update accounts set obj = json_set(obj, '$.account', 'empleado', '$.status', 'contratado', '$.schedule', '$schedule', '$.schedulestarttime', '$schedulestarttime', '$.scheduleendtime', '$scheduleendtime') where id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$sql = "insert into messages (obj) values(json_object('date', '$date', 'iduser', '$id', 'messages', 'update', 'schedule', '$schedule'))";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

}
       
}
}


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => 'over'
	)));

};

}

}

    
 

};


function deleteupdatemessage(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$id = $_POST["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

} 


    
$sql = "delete from messages where id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

} 

};


function assigntask(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$id = $_POST["id"];
$userid = $_POST["userid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    
$sql = "update senddata set obj = json_set(obj, '$.status', 'asignado', '$.assigned', '$userid') where id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

} 

};

function sendschedule(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$id = $_POST["id"];
$companyid = $_POST["companyid"];
$schedule = $_POST["schedule"];
$quantity = $_POST["quantity"];
$schedulestarttime = $_POST["schedulestarttime"];
$scheduleendtime = $_POST["scheduleendtime"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} 

$sql = "select if((obj->>'$.jobs' >= (obj->>'$.assigned' + '$quantity' )),'yes','no') as eval, (obj->>'$.jobs' - (obj->>'$.assigned' + '$quantity')) as total from requisition where obj->>'$.accountid' = '$companyid' && id = '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$contatos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
if($contatos[0]["eval"] === 'yes'){
$sql = "update requisition set obj = json_set(obj, '$.assigned', (obj->>'$.assigned' + '$quantity')) where obj->>'$.accountid' = '$companyid' && id = '$id';";
$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "update requisition set obj = json_set(obj, '$.schedules', json_array_insert(obj->>'$.schedules', '$[0]', json_object('schedule','$schedule', 'quantity','$quantity', 'used', 0, 'schedulestarttime', '$schedulestarttime', 'scheduleendtime', '$scheduleendtime')) ) where obj->>'$.accountid' = '$companyid' and id =  '$id';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}

}

}

if($contatos[0]["eval"] === 'no'){
       $conn->close();

        echo stripslashes(json_encode(array(
		"success" => 'over',
		"quantity" => $contatos[0]["total"]
	)));

}

}

}


};


function sendrequisition(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$date = $_POST["date"];
$companyid = $_POST["companyid"];
$jobs = $_POST["jobs"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} 


$sql = "insert into requisition (date, obj) values('$date', json_object('accountid', '$companyid','requisition', '$date', 'assigned', 0, 'jobs', '$jobs', 'salary', '1 quetzal por cada llamada', 'status', 'en proceso', 'schedules', json_array()));";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}
};



function closecall(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$chatdate = $_POST["chatdate"];
$endtime = $_POST["endtime"];
$accountid = $_POST["accountid"];
$chatinprogressid = $_POST["chatinprogressid"];
$iduser = $_POST["iduser"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "select obj->>'$.employeeid' as employeeid from chats where obj->>'$.accountid' = '$accountid' and id = '$chatinprogressid';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
if($contatos[0]["employeeid"] != null){
$sql = "update accounts set obj = json_set(obj, '$.status', 'online') where id = '$iduser';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

} 

} else {
$sql = "update chats set obj = json_set(obj, '$.status', 'closed', '$.abandoned', 'true', '$.endtime', '$endtime') where id = '$chatinprogressid';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "delete from messages where obj->>'$.date' = '$chatdate';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}
}
}  
  


}  


}
};


function answerthecall(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$chatdate = $_POST["chatdate"];
$accountid = $_POST["accountid"];
$chatinprogressid = $_POST["chatinprogressid"];
$name = $_POST["name"];
$message = $_POST["message"];
$date = $_POST["date"];
$iduser = $_POST["iduser"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "select obj->>'$.answered' as answered, obj->>'$.abandoned' as abandoned from chats where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid'";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
if($contatos[0]["abandoned"] === 'true'){
    $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

} else {
if($contatos[0]["answered"] === 'true'){
    $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

} else {

$sql = "update chats set obj = json_set(obj, '$.answered', 'yes') where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'date','$date')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "update accounts set obj = json_set(obj, '$.status', 'oncall') where id = '$iduser';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "delete from messages where obj->>'$.date' = '$chatdate';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));



}

}

}

}

}
} 
  


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

}  


}
};


function qareportcharts(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$date = $_GET["date"];
$employeeid = $_GET["employeeid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];

$sql = "set @row_number = 0;";
$result = $conn->query($sql);

$sql = "select (@row_number:=@row_number + 1) as time, obj->>'$.eval' as core2 from evaluations where date >= ('$date' - interval 60 day) and employeeid = '$employeeid' order by date asc limit 15;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}

};

function performancereportone(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$date2 = $_GET["date2"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];
if(!$date2){
$sql = "select count(*) as count from (select chats.obj->>'$.employeeid' as id from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  = '$date' group by id) as t3;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$total = $contatos[0]["count"];
$objs->total = $total;
$sql = "select chats.obj->>'$.employeeid' as id, accounts.obj->>'$.name' as name, count(chats.obj->>'$.answered' = 'true') as count from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  = '$date' group by chats.obj->>'$.employeeid', accounts.obj->>'$.name' order by count desc limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
} else {
$sql = "select count(*) as count from (select chats.obj->>'$.employeeid' as id from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  >= '$date' && date(date) <= '$date2' group by id) as t3;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

$total = $contatos[0]["count"];
$objs->total = $total;
$sql = "select chats.obj->>'$.employeeid' as id, accounts.obj->>'$.name' as name, count(chats.obj->>'$.answered' = 'true') as count from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  >= '$date' && date(date) <= '$date2' group by chats.obj->>'$.employeeid', accounts.obj->>'$.name' order by count desc limit $start, $limit;";
	
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
}

};


function performancereport(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$date2 = $_GET["date2"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];
if(!$date2){
$sql = "select count(*) as count from (select chats.obj->>'$.employeeid' as id from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  = '$date' group by id) as t3;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$total = $contatos[0]["count"];
$objs->total = $total;
$sql = "select chats.obj->>'$.employeeid' as id, accounts.obj->>'$.name' as name, round((sum(time(chats.obj->>'$.endtime') - time(chats.obj->>'$.starttime'))/count(chats.obj->>'$.answered' = 'true')),2) as tmo from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  = '$date' group by chats.obj->>'$.employeeid', accounts.obj->>'$.name' order by tmo asc limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
} else {
$sql = "select count(*) as count from (select chats.obj->>'$.employeeid' as id from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  >= '$date' && date(date) <= '$date2' group by id) as t3;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

$total = $contatos[0]["count"];
$objs->total = $total;
$sql = "select chats.obj->>'$.employeeid' as id, accounts.obj->>'$.name' as name, round((sum(time(chats.obj->>'$.endtime') - time(chats.obj->>'$.starttime'))/count(chats.obj->>'$.answered' = 'true')),2) as tmo from chats, accounts where chats.obj->>'$.accountid' = '$accountid' and chats.obj->>'$.employeeid' = accounts.id and date(date)  >= '$date' && date(date) <= '$date2' group by chats.obj->>'$.employeeid', accounts.obj->>'$.name' order by tmo asc limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
}

};


function typeofcalltwo(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$date2 = $_GET["date2"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];
if(!$date2){
$sql = "select count(substring_index(obj->>'$.calltype','-',1)) as memory from chats where obj->>'$.accountid' = '$accountid' and date(date) = '$date' limit 5;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$total = $contatos[0]["memory"];
$sql = "set @w = '$total';";
$result = $conn->query($sql);
$objs->total = $result->num_rows;
$sql = "select substring_index(obj->>'$.calltype','-',1) as name, count(obj->>'$.calltype') as memory, @w as count, concat(round(((count(obj->>'$.calltype')/@w)*100),2),'%') as percentage from chats where obj->>'$.accountid' = '$accountid' and date(date) = '$date' group by name order by memory desc limit 5;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
} else {
$sql = "select count(substring_index(obj->>'$.calltype','-',1)) as memory from chats where obj->>'$.accountid' = '$accountid' and date(date) >= '$date' and date(date) <= '$date2' limit 5;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

$total = $contatos[0]["memory"];
$sql = "set @w = '$total';";
$result = $conn->query($sql);
$objs->total = $result->num_rows;
$sql = "select substring_index(obj->>'$.calltype','-',1) as name, count(obj->>'$.calltype') as memory, @w as count, concat(round(((count(obj->>'$.calltype')/@w)*100),2),'%') as percentage from chats where obj->>'$.accountid' = '$accountid' and date(date) >= '$date' and date(date) <= '$date2' group by name order by memory desc limit 5;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
}

};


function typeofcall(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$date2 = $_GET["date2"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];
if(!$date2){
$sql = "select count(obj->>'$.calltype') as memory from chats where obj->>'$.accountid' = '$accountid' and date(date) = '$date' limit 5;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$total = $contatos[0]["memory"];
$sql = "set @w = '$total';";
$result = $conn->query($sql);
$objs->total = $result->num_rows;
$sql = "select obj->>'$.calltype' as name, count(obj->>'$.calltype') as memory, @w as count, concat(round(((count(obj->>'$.calltype')/@w)*100),2),'%') as percentage from chats where obj->>'$.accountid' = '$accountid' and date(date) = '$date' group by name order by memory desc limit 5;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
} else {
$sql = "select count(obj->>'$.calltype') as memory from chats where obj->>'$.accountid' = '$accountid' and date(date) >= '$date' and date(date) <= '$date2' limit 5;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

$total = $contatos[0]["memory"];
$sql = "set @w = '$total';";
$result = $conn->query($sql);
$objs->total = $result->num_rows;
$sql = "select obj->>'$.calltype' as name, count(obj->>'$.calltype') as memory, @w as count, concat(round(((count(obj->>'$.calltype')/@w)*100),2),'%') as percentage from chats where obj->>'$.accountid' = '$accountid' and date(date) >= '$date' and date(date) <= '$date2' group by name order by memory desc limit 5;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
}

};


function listtypeofcall(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$date2 = $_GET["date2"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];
if(!$date2){
$sql = "select count(obj->>'$.calltype') as memory from chats where obj->>'$.accountid' = '$accountid' and date(date) = '$date';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$total = $contatos[0]["memory"];
$sql = "set @w = '$total';";
$result = $conn->query($sql);
$objs->total = $result->num_rows;
$sql = "select obj->>'$.calltype' as name, count(obj->>'$.calltype') as memory, @w as count, concat(round(((count(obj->>'$.calltype')/@w)*100),2),'%') as percentage from chats where obj->>'$.accountid' = '$accountid' and date(date) = '$date' group by name order by memory desc limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
} else {
$sql = "select count(obj->>'$.calltype') as memory from chats where obj->>'$.accountid' = '$accountid' and date(date) >= '$date' and date(date) <= '$date2';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

$total = $contatos[0]["memory"];
$sql = "set @w = '$total';";
$result = $conn->query($sql);
$objs->total = $result->num_rows;
$sql = "select obj->>'$.calltype' as name, count(obj->>'$.calltype') as memory, @w as count, concat(round(((count(obj->>'$.calltype')/@w)*100),2),'%') as percentage from chats where obj->>'$.accountid' = '$accountid' and date(date) >= '$date' and date(date) <= '$date2' group by name order by memory desc limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
}

};

function listreq(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];

$sql = "select count(*) as total from requisition where obj->>'$.accountid' = '$accountid' && obj->>'$.status' = 'en proceso';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$objs->total = $contatos[0]["total"];
$sql = "select id, date as requisition from requisition where obj->>'$.accountid' = '$accountid' && obj->>'$.status' = 'en proceso' limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

}
}
};



function listevaluations(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$employeeid = $_GET["employeeid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];

$sql = "select count(*) as total from evaluations where employeeid = '$employeeid' and date >= ('$date' - interval 500 day);";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$objs->total = $contatos[0]["total"];
$sql = "select evaluations.id as id, evaluations.employeeid as employeeid, evaluations.obj->>'$.eval' as eval, evaluations.date as date, accounts.obj->>'$.name' as name from evaluations, accounts where evaluations.employeeid = accounts.id && evaluations.employeeid = '$employeeid' && evaluations.date >= ('$date' - interval 500 day) order by evaluations.date desc limit  $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
};


function qareport(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];

$sql = "select count(*) as total from accounts where obj->>'$.accountid' = '$accountid' && obj->>'$.account' = 'empleado';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }


$objs->total = $contatos[0]["total"];
$sql = "select id as id, obj->>'$.name' as name from accounts where obj->>'$.accountid' = '$accountid' && obj->>'$.account' = 'empleado' limit  $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
}
}
};


function cumulativereport(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$date = $_GET["date"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];

$sql = "select date(date) as date, count(*) as total from chats where obj->>'$.accountid' = '$accountid' &&  date(date)  >= ('$date' - interval 100 day) group by date(date) order by date desc;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$objs->total = $result->num_rows;
$sql = "select count(*) as total, date(date) as date, count(obj->>'$.abandoned' = 'true') as abandonedcalls, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round((count(obj->>'$.abandoned' = 'true') / count(*)*100), 2) as abandonpercent  from chats where obj->>'$.accountid' = '$accountid' &&  date(date)  >= ('$date' - interval 100 day) group by date(date) order by date desc limit $start, $limit;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}

}
};


function forecastreport(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$day = $_GET["day"];
$date = $_GET["date"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($day === "lunes"){
$dayname = "monday";
}

if($day === "martes"){
$dayname = "tuesday";
}

if($day === "miercoles"){
$dayname = "wednesday";
}

if($day === "jueves"){
$dayname = "thursday";
}

if($day === "viernes"){
$dayname = "friday";
}

if($day === "sabado"){
$dayname = "saturday";
}

if($day === "domingo"){
$dayname = "sunday";
}

$objs->success = true;
$objs->data = [];

$sql = "select ('00:00:00 to 01:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '00:00:00' && time(date) <= '01:00:00' group by date(date)) as t1 union select ('01:00:00 to 02:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '01:00:00' && time(date) <= '02:00:00' group by date(date)) as t1 union select ('02:00:00 to 03:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '02:00:00' && time(date) <= '03:00:00' group by date(date)) as t1 union select ('03:00:00 to 04:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '03:00:00' && time(date) <= '04:00:00' group by date(date)) as t1 union select ('04:00:00 to 05:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '04:00:00' && time(date) <= '05:00:00' group by date(date)) as t1 union select ('05:00:00 to 06:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '05:00:00' && time(date) <= '06:00:00' group by date(date)) as t1 union select ('06:00:00 to 07:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '06:00:00' && time(date) <= '07:00:00' group by date(date)) as t1 union select ('07:00:00 to 08:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '07:00:00' && time(date) <= '08:00:00' group by date(date)) as t1 union select ('08:00:00 to 09:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '08:00:00' && time(date) <= '09:00:00' group by date(date)) as t1 union select ('09:00:00 to 10:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '09:00:00' && time(date) <= '10:00:00' group by date(date)) as t1 union select ('10:00:00 to 11:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '10:00:00' && time(date) <= '11:00:00' group by date(date)) as t1 union select ('11:00:00 to 12:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '11:00:00' && time(date) <= '12:00:00' group by date(date)) as t1 union select ('12:00:00 to 13:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '12:00:00' && time(date) <= '13:00:00' group by date(date)) as t1 union select ('13:00:00 to 14:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '13:00:00' && time(date) <= '14:00:00' group by date(date)) as t1 union select ('14:00:00 to 15:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '14:00:00' && time(date) <= '15:00:00' group by date(date)) as t1 union select ('15:00:00 to 16:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '15:00:00' && time(date) <= '16:00:00' group by date(date)) as t1 union select ('16:00:00 to 17:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '16:00:00' && time(date) <= '17:00:00' group by date(date)) as t1 union select ('17:00:00 to 18:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '17:00:00' && time(date) <= '18:00:00' group by date(date)) as t1 union select ('18:00:00 to 19:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '18:00:00' && time(date) <= '19:00:00' group by date(date)) as t1 union select ('19:00:00 to 20:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '19:00:00' && time(date) <= '20:00:00' group by date(date)) as t1 union select ('20:00:00 to 21:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '20:00:00' && time(date) <= '21:00:00' group by date(date)) as t1 union select ('21:00:00 to 22:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '21:00:00' && time(date) <= '22:00:00' group by date(date)) as t1 union select ('22:00:00 to 23:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '22:00:00' && time(date) <= '23:00:00' group by date(date)) as t1 union select ('23:00:00 to 24:00:00') as intervalo, max(total) as total, max(forecastcalls) as forecastcalls, max(abandonedcalls) as abandonedcalls, max(agentsneeded) as agentsneeded, max(agentsavailable) as agentsavailable, max(tmo) as tmo, max(abandonedpercent) as abandonedpercent, max(answeredcalls) as answeredcalls, max(servicelevel) as servicelevel from (select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, round((((count(*)/12)*6)*3),0) as forecastcalls, count(obj->>'$.abandoned' = 'true') as abandonedcalls, round(if(count(*) <= 12, (count(*)*1), ((count(*)/12)*6)),0) as agentsneeded, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid'   && dayname(date) = '$dayname' and  date(date) >= ('$date' - interval 100 day)  && time(date) >= '23:00:00' && time(date) <= '24:00:00' group by date(date)) as t1;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


 } 


}
};


function messages(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$iduser = $_GET["iduser"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->data = [];

$sql = "select id, obj->>'$.date' as date, obj->>'$.messages' as messages, obj->>'$.accountid' as accountid, obj->>'$.chatinprogressid' as chatinprogressid, obj->>'$.iduser' as iduser, obj->>'$.schedule' as schedule  from messages where obj->>'$.iduser' = '$iduser' order by obj->>'$.date' asc;";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));


  

 } 


}
};

function reportperdate(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$date = $_GET["date"];
$date2 = $_GET["date2"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
if(!$date2){
$sql = "select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '00:00:00' && time(date) <= '01:00:00' union select ('01:00:00 to 02:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '01:00:00' && time(date) <= '02:00:00' union select ('02:00:00 to 03:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '02:00:00' && time(date) <= '03:00:00' union select ('03:00:00 to 04:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '03:00:00' && time(date) <= '04:00:00' union select ('04:00:00 to 05:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '04:00:00' && time(date) <= '05:00:00' union select ('05:00:00 to 06:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '05:00:00' && time(date) <= '06:00:00' union select ('06:00:00 to 07:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '06:00:00' && time(date) <= '07:00:00' union select ('07:00:00 to 08:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '07:00:00' && time(date) <= '08:00:00' union select ('08:00:00 to 09:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '08:00:00' && time(date) <= '09:00:00' union select ('09:00:00 to 10:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '09:00:00' && time(date) <= '10:00:00' union select ('10:00:00 to 11:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '10:00:00' && time(date) <= '11:00:00' union select ('11:00:00 to 12:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '11:00:00' && time(date) <= '12:00:00' union select ('12:00:00 to 13:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '12:00:00' && time(date) <= '13:00:00' union select ('13:00:00 to 14:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '13:00:00' && time(date) <= '14:00:00' union select ('14:00:00 to 15:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '14:00:00' && time(date) <= '15:00:00' union select ('15:00:00 to 16:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '15:00:00' && time(date) <= '16:00:00' union select ('16:00:00 to 17:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '16:00:00' && time(date) <= '17:00:00' union select ('17:00:00 to 18:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '17:00:00' && time(date) <= '18:00:00' union select ('18:00:00 to 19:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '18:00:00' && time(date) <= '19:00:00' union select ('19:00:00 to 20:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '19:00:00' && time(date) <= '20:00:00' union select ('20:00:00 to 21:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '20:00:00' && time(date) <= '21:00:00' union select ('21:00:00 to 22:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '21:00:00' && time(date) <= '22:00:00' union select ('22:00:00 to 23:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '22:00:00' && time(date) <= '23:00:00' union select ('23:00:00 to 24:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) = '$date'  && time(date) >= '23:00:00' && time(date) <= '24:00:00';";
} else {
$sql = "select ('00:00:00 to 01:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '00:00:00' && time(date) <= '01:00:00' union select ('01:00:00 to 02:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '01:00:00' && time(date) <= '02:00:00' union select ('02:00:00 to 03:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '02:00:00' && time(date) <= '03:00:00' union select ('03:00:00 to 04:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '03:00:00' && time(date) <= '04:00:00' union select ('04:00:00 to 05:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '04:00:00' && time(date) <= '05:00:00' union select ('05:00:00 to 06:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '05:00:00' && time(date) <= '06:00:00' union select ('06:00:00 to 07:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '06:00:00' && time(date) <= '07:00:00' union select ('07:00:00 to 08:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '07:00:00' && time(date) <= '08:00:00' union select ('08:00:00 to 09:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '08:00:00' && time(date) <= '09:00:00' union select ('09:00:00 to 10:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '09:00:00' && time(date) <= '10:00:00' union select ('10:00:00 to 11:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '10:00:00' && time(date) <= '11:00:00' union select ('11:00:00 to 12:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '11:00:00' && time(date) <= '12:00:00' union select ('12:00:00 to 13:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '12:00:00' && time(date) <= '13:00:00' union select ('13:00:00 to 14:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '13:00:00' && time(date) <= '14:00:00' union select ('14:00:00 to 15:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '14:00:00' && time(date) <= '15:00:00' union select ('15:00:00 to 16:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '15:00:00' && time(date) <= '16:00:00' union select ('16:00:00 to 17:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '16:00:00' && time(date) <= '17:00:00' union select ('17:00:00 to 18:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '17:00:00' && time(date) <= '18:00:00' union select ('18:00:00 to 19:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '18:00:00' && time(date) <= '19:00:00' union select ('19:00:00 to 20:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '19:00:00' && time(date) <= '20:00:00' union select ('20:00:00 to 21:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '20:00:00' && time(date) <= '21:00:00' union select ('21:00:00 to 22:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '21:00:00' && time(date) <= '22:00:00' union select ('22:00:00 to 23:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '22:00:00' && time(date) <= '23:00:00' union select ('23:00:00 to 24:00:00') as intervalo, count(*) as total, count(obj->>'$.abandoned' = 'true') as abandonedcalls, max(obj->>'$.agentsavailable') as agentsavailable, round((sum(time(obj->>'$.endtime') - time(obj->>'$.starttime'))/count(*)), 2) as tmo, round(((count(obj->>'$.abandoned' = 'true')/count(*))*100),2) as abandonedpercent, count(obj->>'$.answered' = 'true') as answeredcalls, round(((count(obj->>'$.answered' = 'true')/count(*))*100),2) as servicelevel from chats where obj->>'$.accountid' = '$accountid' && date(date) >= '$date' && date(date) <= '$date2'  && time(date) >= '23:00:00' && time(date) <= '24:00:00';";
}

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
$conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

}
  

 } 


};


function search(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$company = $_GET["company"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];

};

function askforjob(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$iduser = $_POST["iduser"];
$company = $_POST["company"];
$accountid = $_POST["accountid"];
$bankaccount = $_POST["bankaccount"];
$bank = $_POST["bank"];
$dpi = $_POST["dpi"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select obj->>'$.status' as status, obj->>'$.account' as account  from accounts where id = '$iduser';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    if($contatos[0]["account"] === 'empresa'){
    $conn->close();

    echo stripslashes(json_encode(array(
		"success" => false
    )));

    } else {
    if($contatos[0]["status"] === 'contratando' || $contatos[0]["status"] === 'contratado'){
    $conn->close();

    echo stripslashes(json_encode(array(
		"success" => false
    )));

   
    } else {
    $sql = "update accounts set obj = json_set(obj, '$.company', '$company', '$.status', 'contratando', '$.accountid', '$accountid', '$.bankaccount', '$bankaccount','$.bank', '$bank', '$.dpi', '$dpi') where id = '$iduser';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
 
    
$conn->close();
echo stripslashes(json_encode(array(
		"success" => true 
)));

   } 

  }
 }
}
}
};


function workflow(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$companyid = $_GET["companyid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
$sql = "select count(*) as total from senddata where obj->>'$.companyid' = '$companyid' and obj->>'$.status' = 'pendiente' or obj->>'$.status' = 'asignado';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id, obj->>'$.data' as data, obj->>'$.user' as user, obj->>'$.calltype' as calltype, obj->>'$.status' as status, date as date from senddata where obj->>'$.companyid' = '$companyid' and obj->>'$.status' = 'pendiente' or obj->>'$.status' = 'asignado' limit  $start, $limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


};

function requisition(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$companyid = $_GET["companyid"];
$name = $_GET["name"];  
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];

$sql = "select count(*) as total from requisition where obj->>'$.accountid' = '$companyid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id, obj->>'$.requisition' as requisition, obj->>'$.jobs' as jobs, obj->>'$.salary' as salary, obj->>'$.status' as status from requisition where obj->>'$.accountid' = '$companyid' order by requisition desc limit $start, $limit";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}
};



function recruitment(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$companyid = $_GET["companyid"];
$name = $_GET["name"];  
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
if($name){
$sql = "select obj->>'$.name' as total from accounts where obj->>'$.accountid' = '$companyid' and obj->>'$.name' like concat('$name','%') and obj->>'$.account' = ('empleado' or 'usuario normal');";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id, obj->>'$.name' as name, obj->>'$.status' as status, obj->>'$.bank' as bank, obj->>'$.dpi' as dpi, obj->>'$.bankaccount' as bankaccount from accounts where obj->>'$.accountid' = '$companyid' and obj->>'$.name' like concat('$name','%') and obj->>'$.account' = ('empleado' or 'usuario normal') limit $start, $limit;" ;

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


} else { 

$sql = "select count(*) as total from accounts where obj->>'$.accountid' = '$companyid' and obj->>'$.account' = ('usuario normal' or 'empleado');";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id, obj->>'$.name' as name, obj->>'$.status' as status, obj->>'$.bank' as bank, obj->>'$.dpi' as dpi, obj->>'$.bankaccount' as bankaccount from accounts where obj->>'$.accountid' = '$companyid' and obj->>'$.account' = ('usuario normal' or 'empleado') limit $start, $limit;" ;

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}
}
};

function listreqschedules(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$requisition = $_GET["requisition"];
$accountid = $_GET["accountid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
       $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));

} 

$objs->success = true;

$sql = "select obj->>'$.schedules' as schedules from requisition where obj->>'$.accountid' = '$accountid' and id = '$requisition';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $objs->data = json_decode($row["schedules"]);

    }
 
  
$conn->close();
echo json_encode($objs);



}


}  

  
};


function listchatsconversations(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$employeeid = $_GET["employeeid"];
$iduser = $_GET["iduser"];
$accountid = $_GET["accountid"];
$date = $_GET["date"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;

if($employeeid){
$sql = "select obj->>'$.chats' as chats  from chats where date = '$date' and obj->>'$.accountid' = '$accountid' and obj->>'$.employeeid' = '$employeeid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $objs->data = json_decode($row["chats"]);

    }
 
  
$conn->close();
echo json_encode($objs);



}


}  

} else {
$sql = "select obj->>'$.chats' as chats  from chats where date = '$date' and obj->>'$.accountid' = '$accountid' and obj->>'$.iduser' = '$iduser';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $objs->data = json_decode($row["chats"]);

    }
 
  
$conn->close();
echo json_encode($objs);



}


}  

}  
};


function sendinternalchat(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$employeeid = $_GET["employeeid"];
$iduser = $_GET["iduser"];
$accountid = $_GET["accountid"];
$date = $_GET["date"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
$sql = "insert into ";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

}

};


function listchatsdates(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$employeeid = $_GET["employeeid"];
$iduser = $_GET["iduser"];
$accountid = $_GET["accountid"];
$date = $_GET["date"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
if($employeeid){
$sql = "select count(id) as total from chats where date >= ('$date' - interval 500 day) and obj->>'$.accountid'= '$accountid' and obj->>'$.employeeid' = '$employeeid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id, date as date from chats where date >= ('$date' - interval 500 day) and obj->>'$.accountid'= '$accountid' and obj->>'$.employeeid' = '$employeeid' order by date desc limit  $start, $limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


} else {
$sql = "select count(id) as total from chats where date >= ('$date' - interval 500 day) and obj->>'$.accountid'= '$accountid' and obj->>'$.iduser' = '$iduser';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id, date as date from chats where date >= ('$date' - interval 500 day) and obj->>'$.accountid'= '$accountid' and obj->>'$.iduser' = '$iduser' order by date desc limit  $start, $limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


} 

 
};


function listchatscompanies(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$employeeid = $_GET["employeeid"];
$iduser = $_GET["iduser"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
if($employeeid){
$sql = "select count(chats.obj->>'$.name') as total, accounts.obj->>'$.name' as name from chats, accounts where chats.obj->>'$.accountid' = accounts.id and chats.obj->>'$.employeeid'= '$employeeid' group by name;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select chats.obj->>'$.accountid' as id, accounts.obj->>'$.name' as name from chats, accounts where chats.obj->>'$.accountid' = accounts.id and chats.obj->>'$.employeeid'= '$employeeid' group by id, name limit $start, $limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


} else {
$sql = "select count(chats.obj->>'$.name') as total, accounts.obj->>'$.name' as name from chats, accounts where chats.obj->>'$.accountid' = accounts.id and chats.obj->>'$.iduser'= '$iduser' group by name;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select chats.obj->>'$.accountid' as id, accounts.obj->>'$.name' as name from chats, accounts where chats.obj->>'$.accountid' = accounts.id and chats.obj->>'$.iduser'= '$iduser' group by id, name limit $start, $limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


}

 
};



function listcompanies(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$start = $_GET["start"];
$limit = $_GET["limit"];
$company = $_GET["company"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objs->success = true;
$objs->total = 0;
$objs->data = [];
if($company){
$sql = "select count(*) as total from accounts where obj->>'$.account' = 'empresa' && obj->>'$.name' like concat('$company', '%');";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id,  obj->>'$.name' as name, obj->>'$.description' as description, obj->>'$.jobs' as jobs,  obj->>'$.salary' as salary from accounts where obj->>'$.account' = 'empresa' && obj->>'$.name' like concat('$company', '%') limit  $start,$limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 

}
}


} else {

$sql = "select count(*) as total from accounts where obj->>'$.account' = 'empresa';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$objs->total = $contatos[0]["total"];

$sql = "select id as id,  obj->>'$.name' as name, obj->>'$.description' as description, obj->>'$.jobs' as jobs,  obj->>'$.salary' as salary from accounts where obj->>'$.account' = 'empresa' limit  $start,$limit;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
 
$objs->data = $contatos;
  
    
$conn->close();
echo stripslashes(json_encode($objs));
 

} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
 
}
  

 } 
}
}
}
};

function sendchat(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$accountid = $_POST["accountid"];
$iduser = $_POST["iduser"];
$name = $_POST["name"];
$message = $_POST["message"];
$endtime = $_POST["endtime"];
$calltype = $_POST["calltype"];
$date = $_POST["date"];
$companyname = $_POST["companyname"];
$chatinprogressid = $_POST["chatinprogressid"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(!$chatinprogressid){
$sql = "select id as id from chats where obj->>'$.status' = 'active' && obj->>'$.iduser' = '$iduser';";
$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
$chatid = $contatos[0]['id'];    
$sql = "update chats set obj = json_set(obj, '$.status', 'closed') where obj->>'$.iduser' = '$iduser';";
$result = $conn->query($sql);
$sql = "delete from messages where obj->>'$.chatinprogressid' = '$chatid';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "select count(*) as total from accounts where obj->'$.account' = 'empleado' and obj->'$.status' = 'online' and obj->'$.accountid' = $accountid;";
$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
$total = $contatos[0]["total"];

$sql = "insert chats (date, obj) values('$date', json_object('agentsavailable','$total', 'iduser', '$iduser', 'accountid', '$accountid', 'starttime', '$date', 'status', 'active', 'chats', json_array()));";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "select id from chats where obj->'$.iduser' = '$iduser' and obj->'$.accountid' = '$accountid' and obj->'$.status' = 'active';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
$chatid = $contatos[0]["id"];

$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'company', '$companyname')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$sql = "select id from accounts where obj->'$.status' = 'online' and obj->'$.account'= 'empleado';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;
    }

$length = count($contatos);
for ($i = 0; $i < $length; $i++) {
$rowid = $contatos[$i]["id"];	
$sql = "insert messages (obj) values(json_object('messages','call', 'accountid', '$accountid', 'chatinprogressid',  '$chatid'  ,'iduser', '$rowid', 'date', '$date'));";

$resulta = $conn->query($sql);
}

if(!$resulta){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true,
		"id" => $chatid,
		"date" => $date
	)));

}



  } else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}
    

};

    

};

  } else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


} 
    

};


};


} else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}


};

} 
} else {
$sql = "select count(*) as total from accounts where obj->'$.account' = 'empleado' and obj->'$.status' = 'online' and obj->'$.accountid' = $accountid;";
$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
$total = $contatos[0]["total"];

$sql = "insert chats (date, obj) values('$date', json_object('agentsavailable','$total', 'iduser', '$iduser', 'accountid', '$accountid', 'starttime', '$date', 'status', 'active', 'chats', json_array()));";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "select id from chats where obj->'$.iduser' = '$iduser' and obj->'$.accountid' = '$accountid' and obj->'$.status' = 'active';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
$chatid = $contatos[0]["id"];

$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'company', '$companyname')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {

$sql = "select id from accounts where obj->'$.status' = 'online' and obj->'$.account'= 'empleado';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;
    }

$length = count($contatos);
for ($i = 0; $i < $length; $i++) {
$rowid = $contatos[$i]["id"];	
$sql = "insert messages (obj) values(json_object('messages','call', 'accountid', '$accountid', 'chatinprogressid',  '$chatid'  ,'iduser', '$rowid', 'date', '$date'));";

$resulta = $conn->query($sql);
}

if(!$resulta){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));
} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true,
		"id" => $chatid,
		"date" => $date
	)));

}



  } else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}
    

};

    

};

  } else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


} 
    

};


};


} else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}


};

}

}
} else {
$sql = "select obj->>'$.iduser' as iduser from chats where obj->>'$.accountid' = '$accountid' and id = '$chatinprogressid';";
$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;
    }
    
if($contatos[0]["iduser"] === $iduser){
$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'company', '$companyname')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));

}
} else {
$sql = "update chats set obj = json_set(obj, '$.employeeid', '$iduser' ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid'";

$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {


$sql = "select obj->>'$.employeeid' as employeeid from chats where obj->>'$.accountid' = '$accountid' and id = '$chatinprogressid';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;
    }
    
if($contatos[0]["employeeid"] != null){
if($endtime){
$sql = "update chats set obj = json_set(obj, '$.status', 'closed', '$.endtime', '$endtime', '$.calltype', '$calltype') where  obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'company', '$companyname')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}
}
} else {
$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'company', '$companyname')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}
}
} else {

$sql = "update chats set obj = json_set(obj, '$.employeeid', '$iduser' ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid'";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$sql = "update chats set obj = json_set(obj, '$.chats', json_array_insert(obj->>'$.chats', '$[0]', json_object('name','$name', 'message', '$message', 'company', '$companyname')) ) where obj->>'$.accountid' = '$accountid' and id =  '$chatinprogressid';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => true
	)));


}       

}
}

} else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}
}
}
}
} else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}
}

}
};

function verifyschedule(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$iduser = $_POST["iduser"];
$date = $_POST["date"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select obj->>'$.overtime' as overtime from overtime where date(date) = date('$date') and obj->>'$.iduser' = $iduser;";


$result = $conn->query($sql);
if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
      

if($contatos[0]["overtime"] === "yes"){
$conn->close();

echo stripslashes(json_encode(array(
	"success" => true,
	"overtime" => true

	)));

}
} else {
$sql = "select if(time(obj->>'$.schedulestarttime') <= time('$date') && time(obj->>'$.scheduleendtime') >= time('$date'), 'can connect', 'cannot connect') as state, obj->>'$.schedulestarttime' as schedulestarttime, obj->>'$.scheduleendtime' as scheduleendtime from accounts where id = $iduser;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
if($contatos[0]["state"] === "can connect"){
$conn->close();

echo stripslashes(json_encode(array(
	"success" => true,
	"starttime" => $contatos[0]["schedulestarttime"],
	"endtime" => $contatos[0]["scheduleendtime"]
	)));

}

if($contatos[0]["state"] === "cannot connect"){
$conn->close();

echo stripslashes(json_encode(array(
	"success" => false,
	"starttime" => $contatos[0]["schedulestarttime"],
	"endtime" => $contatos[0]["scheduleendtime"]

	)));

}   


} else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}


};


}
 
}



};

function verifycall(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$accountid = $_POST["accountid"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select count(*) as count from accounts where obj->'$.account' = 'empleado' and obj->'$.status' = 'online' and obj->'$.accountid' = $accountid;";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
$conn->close();

echo stripslashes(json_encode(array(
		"success" => true,
		"count" => intval($contatos[0]["count"])
	)));
    


} else {

       $conn->close();

       echo stripslashes(json_encode(array(
		"success" => false
	)));


}


};


};

function online(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$iduser = $_POST["iduser"];
$time = $_POST["time"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select if(time(obj->>'$.schedulestarttime') <= time('$time') && time(obj->>'$.scheduleendtime') >= time('$time'), 'can connect', 'cannot connect') as state, obj->>'$.schedulestarttime' as schedulestarttime, obj->>'$.scheduleendtime' as scheduleendtime from accounts  where id = '$iduser';";
$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
if($contatos[0]["state"] === "cannot connect"){
$conn->close();

echo stripslashes(json_encode(array(
	"success" => false,
        "state" =>  $contatos[0]["state"], 
	"schedulestarttime" =>  $contatos[0]["schedulestarttime"], 
	"scheduleendtime" => $contatos[0]["scheduleendtime"] 
	)));

};


if($contatos[0]["state"] === "can connect"){
$sql = "update accounts set obj = json_set(obj, '$.status', 'online') where id = '$iduser';";

$result = $conn->query($sql);

if(!$result){
        $conn->close();

        echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
   
$conn->close();

echo stripslashes(json_encode(array(
	"success" => true,
        "state" =>  $contatos[0]["state"], 
	"schedulestarttime" =>  $contatos[0]["schedulestarttime"], 
	"scheduleendtime" => $contatos[0]["scheduleendtime"] 
	)));
    

  };
 };
}


};


};



function login(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";
$key = $_POST["key"];
$email = $_POST["email"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false
	)));

} 

$sql = "select id as id, obj->>'$.account' as account from accounts where obj->>'$.email' = '$email' && obj->>'$.key' = '$key';";
$result = $conn->query($sql);

if(!$result){
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false,
		"error" => $conn -> error
	)));


} else {
$contatos = [];	
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

if($contatos[0]['account'] === 'empresa' || $contatos[0]['account'] === 'usuario normal'){
$iduser = $contatos[0]['id'];
$sql = "select count(*) as total from chats where obj->>'$.iduser' = '$iduser';";
$result = $conn->query($sql);
if(!$result){
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false,
		"error" => $conn -> error
	)));


} else {
$contatos = [];	
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
  if($contatos[0]['total'] >= 1){
 $sql = "select accounts.id as id, accounts.obj->>'$.accountid' as accountid, accounts.obj->>'$.name' as name, (select chats.id from chats where chats.obj->>'$.iduser' = accounts.id && chats.obj->>'$.status' = 'active' order by date asc limit 1) as chatinprogressid, (select chats.obj->>'$.accountid' from chats where chats.obj->>'$.iduser' = accounts.id && chats.obj->>'$.status' = 'active' order by date asc limit 1) as vaccountid, accounts.obj->>'$.company' as company, accounts.obj->>'$.description' as description, accounts.obj->>'$.account' as account from accounts, chats where chats.obj->>'$.iduser' = accounts.id && accounts.obj->>'$.email' = '$email' and accounts.obj->>'$.key' = '$key' group by accounts.id;";
   
  } else {
  $sql = "select id as id, obj->>'$.accountid' as accountid, obj->>'$.name' as name, obj->>'$.company' as company, obj->>'$.description' as description, obj->>'$.account' as account from accounts where obj->>'$.email' = '$email' and obj->>'$.key' = '$key';";

  }
 }
}
} 

if($contatos[0]['account'] === 'empleado'){
$iduser = $contatos[0]['id'];
$sql = "select count(*) as total from chats where obj->>'$.iduser' = '$iduser';";
$result = $conn->query($sql);
if(!$result){
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false,
		"error" => $conn -> error
	)));


} else {
$contatos = [];	
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
  if($contatos[0]['total'] >= 1){
   $sql = "select accounts.id as id, accounts.obj->>'$.accountid' as accountid, accounts.obj->>'$.name' as name, (select chats.id from chats where chats.obj->>'$.employeeid' = accounts.id && chats.obj->>'$.status' = 'active' order by date asc limit 1) as chatinprogressid, (select chats.obj->>'$.accountid' from chats where chats.obj->>'$.employeeid' = accounts.id && chats.obj->>'$.status' = 'active' order by date asc limit 1) as vaccountid, accounts.obj->>'$.company' as company, accounts.obj->>'$.description' as description, accounts.obj->>'$.account' as account from accounts, chats where chats.obj->>'$.employeeid' = accounts.id && accounts.obj->>'$.email' = '$email' and accounts.obj->>'$.key' = '$key' group by accounts.id;";
   
  } else {
  $sql = "select id as id, obj->>'$.accountid' as accountid, obj->>'$.name' as name, obj->>'$.company' as company, obj->>'$.description' as description, obj->>'$.account' as account from accounts where obj->>'$.email' = '$email' and obj->>'$.key' = '$key';";

  }
 }
}


} 


$result = $conn->query($sql);
} else {
        $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false
	)));

}
}

if(!$result){
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false
	)));


} else {
$contatos = [];


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }
    
$conn->close();

echo stripslashes(json_encode(array(
		"success" => true,
		"data" => $contatos
	)));
    


} else {
       $conn->close();

	echo stripslashes(json_encode(array(
		"success" => false,
		"data" => $contatos
	)));


}


};


}

function  lista(){
$servername = "localhost";
$username = "admin";
$password = "howtoforge";
$dbname = "sac";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select obj->>'$.id' as id, obj->>'$.text' as text, obj->>'$.children' as children, 
obj->>'$.initroot' as initroot, obj->>'$.expanded' as expanded from tree;";
$result = $conn->query($sql);
$contatos = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $contatos[] = $row;

    }

    $fp = fopen('./data.json', 'w');
fwrite($fp, json_encode($contatos));
fclose($fp);
	echo stripslashes(json_encode(array(
		"success" => true,
		"data" => $contatos
	)));

} else {
    echo "0 results";
}
$conn->close();
}
?>

