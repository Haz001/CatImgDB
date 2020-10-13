<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
  <title>Cat Image DataBase</title>
</head>
<body>
<form action="index.php" method="post">
URL: <input type="text" name="url"><br>
Cuteness: <input type="number" name="cuteness"><br>
<input type="submit">
</form>
<?php
$url = "";
$cute = 0;
$posting = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$posting = true;
	$url = test_input($_POST["url"]);
	$cute = test_input($_POST["cuteness"]);
}
$servername = "localhost";
$spwd = fopen("index.php.pwd", "r") or die("Cannot Connect To Database");
$username = trimEnd(fgets($spwd));
$password = trimEnd(fgets($spwd));
$dbname = trimEnd(fgets($spwd));

fclose($myfile);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
echo "<script>var connection = false;</script>";
  die("Connection failed: " . $conn->connect_error);
}

echo "<script>var connection = true;</script>";


if($posting)
{
	$sql = "SELECT * FROM `catimg` WHERE url ='".$url."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		echo "<script>var result = \"URL already in DB\";</script>";
	}else
	{
		$sql = "INSERT INTO catimg VALUES ('".$url."',".$cute.")";
		if ($conn->query($sql) === TRUE)
		{
			echo "New record created successfully";
		} else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}

$sql = "SELECT * FROM `catimg`";
$result = $conn->query($sql);
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  // output data of each row
  echo "<script>\nimglst=[\n";
  while($row = $result->fetch_assoc()) {
    echo "{url: \"".$row["url"]."\",cute: " . $row["cuteness"]."},\n";
  }
  echo "];</script>";
}else
{
  echo "0 results";
}
mysqli_close($conn);
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function trimEnd($text)
{
	$result = "";
	for  ($t=0;$t < strlen($text)-1;$t++)
	{
		$result .=$text[$t];
	}
	return $result;
}


?>
 <div class="container">
      <div id="grid" class="grid">

      </div></div>
<script>
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
async function fillgrid(){
for (var j = 0;j < imglst.length;j++)
{
  await sleep(100);
  var i = imglst.length - (j+1);
  document.getElementById("grid").innerHTML += "<div class=\"img\"><img src="+imglst[i].url+"><div class=\"opt\"><span>Title</span><br/><span><a href='#'>↑</a>"+imglst[i].cute+"<a href='#'>↓</a><br/></span></div></div>";
  console.log(imglst[i].num);
}}
fillgrid();
</script>
</body>
</html>
