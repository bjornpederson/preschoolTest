<?php
include("dbpreschool.php");
//Assign the data passed from Flex to variables

$studentID = mysql_real_escape_string($_GET["studentID"]);
$answer = mysql_real_escape_string($_GET["answer"]);
$question = mysql_real_escape_string($_GET["questionNumber"]);
if ($question == 1){
$query = "INSERT INTO question1a (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 2){
$query = "INSERT INTO question1b (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 3){
$query = "INSERT INTO question2a (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 4){
$query = "INSERT INTO question2b (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 5){
$query = "INSERT INTO question3a (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 6){
$query = "INSERT INTO question3b (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 7){
$query = "INSERT INTO question4a (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 8){
$query = "INSERT INTO question4b (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 9){
$query = "INSERT INTO question5a (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";
echo"<questionanswered>Question Answered:".$question."</questionanswered>\n";
echo"</studentdata>";
}
if ($question == 10){
$query = "INSERT INTO question5b (studid, answer) VALUES ('$studentID','$answer')";
$result =  mysql_query($query);
$query ="UPDATE names SET finishpic= '2' WHERE id = '$studentID' && finishpic = '1'";
$result =  mysql_query($query);
$query ="SELECT names.id, names.name, names.age, names.timeoutpre, names.finishpic, names.finishmovie, teachers.teachername, gender.type FROM names INNER JOIN teachers ON names.teacher=teachers.id INNER JOIN gender ON names.gender=gender.id WHERE names.id = '$studentID'";
$result =  mysql_query($query);
echo "<?xml version=\"1.0\"?>\n";
echo"<studentdata>\n";

//Create the XML
while($row = mysql_fetch_array($result)){
echo"<studentindividual>\n";
echo"<studid>".$row['id']."</studid>\n";
echo"<studentname>".$row ['name'] ."</studentname>\n";
echo"<studgend>".$row ['type']."</studgend>\n";
echo"<teacher>".$row ['teachername']."</teacher>\n";
echo"<studage>".$row ['age']."</studage>\n";
echo"<pretestfail>".$row ['timeoutpre']."</pretestfail>\n";
echo"<pictest>".$row['finishpic']."</pictest>\n";
echo"<movietest>".$row['finishmovie']."</movietest>\n";
echo"</studentindividual>\n";
}
//Close XML
echo"</studentdata>";

}



mysql_close();

?>