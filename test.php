<?php


// Static Properties
// class pi {
//     public static $value = 3.14159;
//   }
  
//   // Get static property
//   echo pi::$value;

// class pi {
//     public static $value="abhishek";
//     public function staticValue() {
//       return self::$value;
//     }
//   }

// $pi = new pi();
// echo $pi->staticValue();


// Static Methods -- Static methods can be called directly - without creating an instance of the class first.
// class greeting {
//     public static function welcome() {
//       echo "Hello World!";
//     }
//   }
//   greeting::welcome();




// What are Interfaces?
// Interfaces make it easy to use a variety of different classes in the same way. 
// When one or more classes use the same interface, it is referred to as "polymorphism".

// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time


// interface Animal {
//     public function makeSound();
//   }
  
//   class Cat implements Animal {
//     public function makeSound() {
//       echo "Meow";
//     }
//   }
  
//   $animal = new Cat();
//   $animal->makeSound();


// Interface definition
// interface Animal {
//     public function makeSound();
//   }
  
//   // Class definitions
//   class Cat implements Animal {
//     public function makeSound() {
//       echo " Meow ";
//     }
//   }
  
//   class Dog implements Animal {
//     public function makeSound() {
//       echo " Bark ";
//     }
//   }
  
//   class Mouse implements Animal {
//     public function makeSound() {
//       echo " Squeak ";
//     }
//   }
  
//   // Create a list of animals
//   $cat = new Cat();
//   $dog = new Dog();
//   $mouse = new Mouse();
//   $animals = array($cat, $dog, $mouse);
  
//   // Tell the animals to make a sound
//   foreach($animals as $animal) {
//     $animal->makeSound();
//   }




// What are Abstract Classes and Methods?
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// Syntax
// abstract class ParentClass {
//     abstract public function someMethod1();
//     abstract public function someMethod2($name, $color);
//     abstract public function someMethod3() : string;
//   }

// Parent class
// abstract class Car {
//     public $name;
//     public function __construct($name) {
//       $this->name = $name;
//     }
//     abstract public function intro() : string;
//   }
  
//   // Child classes
//   class Audi extends Car {
//     public function intro() : string {
//       return "Choose German quality! I'm an $this->name!";
//     }
//   }
  
//   class Volvo extends Car {
//     public function intro() : string {
//       return "Proud to be Swedish! I'm a $this->name!";
//     }
//   }
  
//   class Citroen extends Car {
//     public function intro() : string {
//       return "French extravagance! I'm a $this->name!";
//     }
//   }
  
//   // Create objects from the child classes
//   $audi = new audi("Audi");
//   echo $audi->intro();
//   echo "<br>";
  
//   $volvo = new volvo("Volvo");
//   echo $volvo->intro();
//   echo "<br>";
  
//   $citroen = new citroen("Citroen");
//   echo $citroen->intro();



// Numbers

// $x = 5985;
// var_dump(is_numeric($x));

// $x = "5985";
// var_dump(is_numeric($x));

// $x = "59.85" + 100;
// var_dump(is_numeric($x));

// $x = "Hello";
// var_dump(is_numeric($x));

// infinite and finite no
// $x = 1.9e411;
// var_dump($x);


// Casting Strings and Floats to Integers
// Cast float to int
// $x = 23465.768;
// $int_cast = (int)$x;
// echo $int_cast;
// echo "<br>";
// // Cast string to int
// $x = "23465.768";
// $int_cast = (int)$x;
// echo $int_cast;





// PHP Namespaces
// They allow for better organization by grouping classes that work together to perform a task
// They allow the same name to be used for more than one class

// echo "Hello World!"; 
// namespace Html; // this is wrong type 


// namespace Html; // this is right type
// echo "Hello World!";


// namespace Html;
// class Table {
//   public $title = "";
//   public $numRows = 0;
//   public function message() {
//     echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
//   }
// }
// $table = new Table();
// $table->title = "My table";
// $table->numRows = 5;







// PHP Constants -- define(name, value, case-insensitive)
// name: Specifies the name of the constant
// value: Specifies the value of the constant
// case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

// define("GREETING", "Welcome to annaaryan98@gmail.com!");
// echo GREETING;
// echo " <br> ";

// define("GREETING", "Welcome to annaaryan98@gmail.com!", true);
// echo greeting;

// Constant Arrays
// define("cars", [
//     "abhishek",
//     "akshay",
//     "aayansh"
//   ]);
//   echo cars[0];
//   echo cars[1];
//   echo cars[2];



// Constants are Global
// define("GREETING", "Welcome to annaaryan98@gmail.com!");

// function myTest() {
    
//     echo GREETING;
// }

// myTest();

// check priorty of local or globle var which one is high
// define("GREETING", "Welcome to annaaryan98@gmail.com!"); // globle var
// function myTest() {
//     define("GREETING", "Welcome to abhishekkumar@gmail.com!"); // local var
//     echo GREETING;
// }
// myTest();




// filter
// $int = 122;
// $min = 1;
// $max = 200;

// if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
//   echo("Variable value is not within the legal range");
// } else {
//   echo("Variable value is within the legal range");
// }

// $url = "https://www.w3schools.com"; // url filter 

// if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
//   echo("$url is a valid URL with a query string");
// } else {
//   echo("$url is not a valid URL with a query string");
// }


// $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334"; // ip address filter

// if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
//   echo("$ip is a valid IPv6 address");
// } else {
//   echo("$ip is not a valid IPv6 address");
// }


// PHP Complete Form Example
// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";



// switch Statement
// $favcolor = "red";
// $favcolor = "";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }





// MySQL Connector

// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// $conn->close();



// Create a MySQL Database Using MySQLi and PDO
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }
// $conn->close();



// create table
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }
// $conn->close();



// Insert Data Into MySQL
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



// Get ID of The Last Inserted Record
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   $last_id = $conn->insert_id;
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();






// Insert Multiple Records Into MySQL
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if ($conn->multi_query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



// Select Data From a MySQL Database
// SELECT column_name(s) FROM table_name
// SELECT * FROM table_name
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();




// Select and Filter Data From a MySQL Database
// The WHERE clause is used to filter records.
// SELECT column_name(s) FROM table_name WHERE column_name operator value


// DELETE 
// DELETE FROM table_name WHERE some_column = some_value
// DELETE FROM customer WHERE id = 3;


// Update Data In a MySQL
// UPDATE table_name SET column1=value, column2=value2 WHERE some_column=some_value 
// UPDATE product SET product_name="abhishek, product_address=lucknow WHERE id=1 




// LIMIT
// OFFSET lagane se value start hoti hai jitna offset diya hai uske 1 baad se 
// mere case me offset=15 hai mtlb record start hogi 16 se aur limit hai 10 ka mtlb 25 tak jyegi
// $sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";

