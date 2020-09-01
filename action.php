<html>

<title>Results</title>
<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>

<div class = "top"></div>
<h1>SEARCH TOOL</h1>




<div class = "full_wide">


<?php
$link = mysqli_connect("localhost:3308", "root", "", "searches");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;

    exit;
}
/*
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
*/



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

    $keyword = $_POST['keyword'];
    $store = $_POST['store'];
    $country = $_POST['parent_selection'];
    $city = $_POST['child_selection'];


    $sql = "INSERT INTO tbl_search_logs (search_id, keyword,store,country,city) 
    VALUES (null, '$keyword','$store','$country','$city')";

}

echo "Values:";

echo "<br>";


echo $keyword; echo "<br>";
echo $store; echo "<br>";
echo $country; echo "<br>";
echo $city; echo "<br>";



echo "<br>";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


echo "<br>";
echo "<br>";

//////////get

/*

if($keyword=='restaurant') {

$sql = "SELECT restaurant_id, restaurant_name FROM tbl_restaurants";
$result = $link->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Restaurant ".$row["restaurant_id"] ."   :  ". $row["restaurant_name"]. "<br>";
  }
} else {
  echo "0 results";
}
}
else {
  echo "Type only restaurant!";
}
*/

mysqli_close($link);
?>


</div>


<div class = "blank"></div>

<div class = "third"></div>


<body>



</body>
</html>