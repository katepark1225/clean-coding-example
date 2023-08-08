<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
header("Content-type:application/json");
$input = json_decode(file_get_contents("php://input"), true);
$conn = mysqli_connect('localhost', '', '', '');
error_reporting(E_ERROR | E_PARSE);

$username = $input['username'];
$language = $input['language'];

// ================== RETURN (START)
$VARIABLE1 = _get_variable1();
$VARIABLE2 = _get_variable2();
$VARIABLE3 = _get_variable3();
$VARIABLE4 = _get_variable4();
$VARIABLE5 = _get_variable5();
$VARIABLE6 = _get_variable6();
$VARIABLE7 = _get_variable7();
$VARIABLE8 = _get_variable8();
$VARIABLE9 = _get_variable9();
$VARIABLE10 = _get_variable10();
// ================== RETURN (END)

// ================== VARIABLE1 (START)
function _get_variable1() {
  $VARIABLE1 = "";
  return $VARIABLE1;
}
// ================== VARIABLE1 (END)

// ================== VARIABLE2 (START)
function _get_variable2() {
  $VARIABLE2 = innerFunction();
  return $VARIABLE2;

  function innerFunction() {
    return 1;
  }
}
// ================== VARIABLE2 (END)

// .. (abridged)

// ================== VARIABLE10 (START)
function _get_variable10() {
  // ================== STATES (START)
  $_INVALID = "INVALID";
  $_NOT_YET_STARTED = "NOT YET STARTED";
  $_IN_PROGRESS = "IN PROGRESS";
  $_COMPLETE = "COMPLETE";
  // ================== STATES (END)
  $VARIABLE10 = $_INVALID;
  return $VARIABLE10;
}
// ================== VARIABLE10 (END)

$response = array();
$response['variable1'] = $VARIABLE1;
$response['variable2'] = FormatNumber($VARIABLE2);
$response['variable3'] = $VARIABLE3;
$response['variable4'] = $VARIABLE4;
$response['variable5'] = $VARIABLE5;
$response['variable6'] = $VARIABLE6;
$response['variable7'] = $VARIABLE7;
$response['variable8'] = $VARIABLE8;
$response['variable9'] = $VARIABLE9;
$response['variable10'] = $VARIABLE10;
echo json_encode($response);

// ================= LOG (START)
$newline = KoreanDateTime()." CLEAN-CODING-EXAMPLE";
$today = KoreanDate();
file_put_contents($today.".log","\r\n".$newline,FILE_APPEND);
// ================= LOG (END)

// ================= UTILITY (START)
function FormatNumber($number) {
    return number_format((float)$number, 2, '.', ',');
}
function KoreanDateTime() {
    $tz = 'Asia/Seoul';
    $timestamp = time();
    $dt = new DateTime("now", new DateTimeZone($tz));
    $dt->setTimestamp($timestamp);
    return $dt->format('d-m-Y H:i:s');
}
// ================= UTILITY (END)
 ?>
