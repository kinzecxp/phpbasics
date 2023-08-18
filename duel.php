<?php
    $first_name = "Lucas";
    $location = "Warri";
    print "$first_name goes for Rehab at $location"

?>

<?php
    $fname = 'Haruki';
    $lname = 'Murakami';
    $book = 'Kafka on the seashore';
    $age = 25;
    $age = 30;
    echo "<p>This newly lunched book titled, <em>$book</em> is written by $fname $lname</p>";
    echo "<p> $fname is $age year old today";

?>

<?php 
  $username = "<p>Fred Smith</p>";
  echo $username;
  # echo "<br>";
  $current_user = $username;
  echo $current_user;  

?>

<?php
    $city = "17 Allen Avenue";
    $state = "Lagos";
    $country = "Nigeria";
    $status = "information computer technology";

    $address = $city . ', ' . $state . ' ' . $country;
    echo $address;
    echo "<br>";
    echo strtoupper($status);
    echo "<br>";
    echo strtolower($status);
    echo "<br>";
    echo ucfirst($status);
    echo "<br>";
    echo ucwords($status);


?>


<?php
    echo "<br>";
    $firstName = 'Michael'; // Using Concatenation assignment operator
    $lastName = 'Owen';
    $playerName = $firstName. ', ';
    echo $playerName .= $lastName;
?>

<?php
    // Numbers in PHP includes integers and floating point numbers using round() and number_format()
    $quantity = 30; // Buying 30 widgets
    $price = 119.95;
    $taxrate = .05;  // 5% sales tax

     // calculate the total:
     $total = $quantity * $price;
     $total + ($total * $taxrate);
     $total = $total + ($total * $taxrate);

     // Format the total
     $total = number_format($total, 2);

     // Print the result
     echo '<p>You are purchasing<strong>' . $quantity . '</strong> 
     widgets at a high cost of <strong>$' . $price . '</strong> each. 
     With tax, the total comes to <strong>$' . $total . '</strong>. </p>';  


?>