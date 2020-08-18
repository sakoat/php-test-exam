<?php
$courses = array(
  array(
      'score' => 50,
      'name' => 'SAM',
      'subject' => 'Algorithm',
     ),
  array(
      'score' => 60,
      'name' => 'SAM',
      'subject' => 'Data Structures',
     ),
  array(
      'score' => 70,
      'name' => 'SAM',
      'subject' => 'Database System',
     ),
  array(
      'score' => 100,
      'name' => 'SAM',
      'subject' => 'Distributed Systems',
     )
);
foreach($courses as $key => $course){
  if($course['score'] == 50){
      echo $course['name']."-".$course['subject']."<br />";
  }
   if($course['score'] == 70){
      echo $course['name']."-".$course['subject']."<br />";
  }
}
?>