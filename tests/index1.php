<?php
/*
function printStudents($anotherStudent = 'aminah')
{
    
        $students = [
            'true', 'abu', 'adam'
        ];

        $students[] = "trump";

        foreach ($students as $student){
            if ($name=='abu')
            {
                echo "abu noob";
            }
            else{
            echo $student . ' ';
            }
        }
    
}

printStudents();

*/

trait CanRun
{
    public function run()
        {
            echo "im running";
        }
}


Class Human
{
    public function scream()
    {
        echo "HI!!";
    }
}


class Student extends Human
{
    use CanRun;

    protected $legs = 2;

    protected $language = 'Melayu';

    public static function speak()
    {
        echo "hello world";
    }
  
}

// $ali = new Student;

// $ali->speak();
// $ali->scream();
// $ali->run();

Student::speak();
?>

<br><br>

<form action="page.php" method="post">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
