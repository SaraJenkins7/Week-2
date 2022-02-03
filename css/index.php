<?php 
print_r($_GET);
$first_name = htmlspecialchars($_GET['first']);
$last_name = htmlspecialchars($_GET['last']);
$age = $_GET['age'];

$first_name = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$last_name = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

if(isset($_GET['first']) && isset($_GET['last'])){
    $first_name = $_GET['first'];
    $last_name = $_GET['last'];
    if(!empty($first_name) && !empty($last_name)){
        echo "Hello, my name is " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "<br>";
    } else {
        echo "Please insert first and last name." . "<br>";
    }
} else {
    echo "Please insert data.";
}

if(isset($_GET['age'])){
    $age = $_GET['age'];
    if(!empty($age) && $age >= 18){
        echo "I am " . $age . " years old and I am old enough to vote in the United States." . "<br>";
    } elseif(!empty($age) && $age < 18) {
        echo "I am " . $age . " years old and I am not old enough to vote in the United States." . "<br>";
    } 
} else {
    echo "Please insert age.";
}

if(isset($_GET['age'])){
    $age = $_GET['age'];
    if(!empty($age)){
        echo "I am " . $age*365 . " days old." . "<br>";
    }
} else {
    echo "Please insert age.";
}

$date = date('m.d.Y');
echo "The date is " . $date . ".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Parameters Assignment </title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>GET Parameters</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="first">First Name: </label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name: </label>
        <input type="text" id="last" name="last" autocomplete="off">
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>

