<?php
//You are given a User class with the methods that set and get the user name and age.
class User {
  public $name;
  public $age;

//Add code to the setName() method that throws the exception whenever the user’s name is shorter than 3 letters.
  public function setName($name) {
    // Trim the white spaces
    $name = trim($name);
/**
Correcteur: Yannick GOUGUIA

error:
$this -> name = $name;  

Correct: 
$this->name = $name;  


Corrige les autres variables
*/
    $this -> name = $name;  
  }

//Add code to the setAge() method that throws the exception whenever the user’s age is less than or equal to zero.
  public function setAge($age) {
    // Cast into an integer type
    $age = (int)$age;
    $this -> age = $age;
  }

  public function getName() {
    return $this -> name;
  }

  public function getAge() {
    return $this -> age;
  }
}

//In the test() method, feed the class with this nested array:
function test()
{
  $dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
);

   foreach ($dataForUsers as $data) {
   $user=new User;
    try {
    $user->setName($data[1]);
    $user->setAge($data[0]);

    echo $user->getName()."is ".$user->getAge()."years ols "."<br>";
  
   } catch (Exception $e) {
    echo "Error ".$e->getMessage()."in the file ".$e->getfile()."<br>";
  
    }
  }

}

?>
