<?php 
//Students class average <70%:
//Dear ,
//We look forward to seeing you at summer school, beginning July 1st!

//Student class average >=70% and current grade 9
//Dear ,
//Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!

//Student class average >=70% and current grade 10
//Dear ,
//Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!

//Student class average >=70% and current grade 11
//Dear ,
//Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!

//Student class average >= 70% and current grade 12
//Dear ,
//Congratulations! You’ve graduated High School! Don’t forget to come back and visit.

$firstName = 'Manoj';
$lastName = 'Muppavarapu';
$currentGrade = '12';
$finalAverage = '0.88';
$messageBody = '';

if (!$firstName || !$lastName)
{ 
  echo 'Please enter a Student Name';
} elseif ($currentGrade < 9 || $currentGrade  > 12)
{ 
  echo 'This is only for high school students. please enter grade between 9 and 12';
}
else
{
  if ($finalAverage <.70){
      $messageBody ='We look forward to seeing you at summer school, beginning July 1st!';
  }else {
        switch($currentGrade){
        case 9:
          $messageBody='Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!';
          break;
         case 10:
          $messageBody = 'Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!';
          break;
         case 11:
          $messageBody = 'Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!';
          break;
         case 12:
          $messageBody ='Congratulations! You’ve graduated High School! Don’t forget to come back and visit.';
          break;
          default:
          $messageBody = 'Grade level is not 9-12';
        }
  }
    echo "Dear $firstName $lastName\n";
    echo $messageBody;
}
?>