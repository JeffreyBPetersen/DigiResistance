<?php
function arrToStr($arr){
	return "[" . implode(",",$arr) . "]";
}

$f = $_GET['f'];
$n = $_GET['n'];
switch($f){
	case "assassinate":
		echo true;
		break;
	case "confirmTeam":
		echo true;
		break;
	case "createGame":
		echo true;
		break;
	case "endgame":
		echo arrToStr(true, arrToStr(array(arrToStr("P1",5),arrToStr("Green Mario",6),arrToStr("Vladimir Putin",7),arrToStr("Patrick Bateman",8),arrToStr("Mister Rogers",1))));
	case "getApprovals":
		echo arrToStr(array("Green Mario","Patrick Bateman"));
		break;
	case "getAvailableGames":
		echo arrToStr(array(arrToStr(10,5,"testgame1")),array(arrToStr(5,5,"testgame2")));
		break;
	case "getChar":
		echo 3;
		break;
	case "getFails":
		echo 2;
		break;
	case "getPlayerList":
		echo arrToStr(array("P1*","!Green Mario","Vladimir Putin","Patrick Bateman","Mister Rogers*"));
		break;
	case "getTeam":
		echo arrToStr(array(true, arrToStr(array("P1","Green Mario","Vladimir Putin","Patrick Bateman","Mister Rogers"))));
		break;
	case "getVoteStatus":
		echo arrToStr(array("Vladimir Putin","Mister Rogers"));
		break;
	case "joinGame":
		echo $n;
		break;
	case "setName":
		echo true;
		break;
	case "teamSelect":
		echo true;
		break;
	case "teamUnselect":
		echo true;
		break;
	case "vote":
		echo 1;
		break;
}
?>