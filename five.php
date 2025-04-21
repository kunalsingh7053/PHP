<?php 
// function sayHello() {
//     echo "Hello World!";
// }
// sayHello();  // Calling

//argument function
// function greet($name) {
//     echo "Hello $name";
// }
// greet("Kunal");

// function greet($name = "Guest") {
//     echo "Hello $name";
// }
// greet(); // Output: Hello Guest

//1) call by value✅
// function addTen($num) {
//     $num += 10;
    
// }
// $value = 10;
// addTen($value);
// echo"$value";
//2) call by refrence✅
// function addTenRef(&$num) {
//     $num += 10;
// }
// $value = 10;
// addTenRef($value);
// echo"$value";
//  1. Local Scope Example:✅
// function localExample() {
//     $name = "Kunal"; // Yeh local variable hai
//     echo "Inside function: $name";
// }
// localExample();

// echo $name; // Error dega kyunki $name function ke bahar access nahi ho sakta

//  2. Global Scope Example (Without using global keyword):✅

// $name = "Kunal"; // Global variable

// function greet() {
//     // echo $name; ❌ Error – $name is not accessible directly
// }
// greet();
//  3. Using global Keyword:✅

$name = "Kunal";

function greet() {
    global $name; // Global variable ko function ke andar la rahe hain
    echo "Hello $name";
}
greet();  // Output: Hello Kunal


?>
