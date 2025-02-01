<!--

Write a PHP program to perform the following operations on an
associative array.
 Display elements of an array along with their keys.
 Display the size of an array.
 Delete an element from an array from the given index.

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
</head>
<body>

<?php
// Sample associative array
$sampleArray = array(
    'name' => 'John',
    'age' => 25,
    'city' => 'New York',
    'occupation' => 'Developer'
);

// Function to display elements of an array along with their keys
function displayArray($array) {
    echo "Elements of the array along with their keys:<br>";
    foreach ($array as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
}

// Function to display the size of an array
function displayArraySize($array) {
    $size = count($array);
    echo "Size of the array: $size<br><br>";
}

// Function to delete an element from an array by index
function deleteElementAtIndex(&$array, $index) {
    if (array_key_exists($index, $array)) {
        unset($array[$index]);
        echo "Element at index $index deleted successfully.<br><br>";
    } else {
        echo "Index $index does not exist in the array.<br><br>";
    }
}

// Display elements of the array along with their keys
displayArray($sampleArray);

// Display the size of the array
displayArraySize($sampleArray);

// Delete an element from the array by index
$indexToDelete = 'age'; // You can change the index as needed
deleteElementAtIndex($sampleArray, $indexToDelete);

// Display the array after deletion
displayArray($sampleArray);
?>

</body>
</html>
