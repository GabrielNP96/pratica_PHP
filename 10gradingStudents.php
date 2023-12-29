<?php
/*Para arredondar a nota do aluno deve faltar apenas dois números para um múltiplo de 5,
  e abaixo de 38 não se arredonda, 
  as notas vão de 0 a 100 e abaixo de 40 são notas ruins.*/

  function gradingStudents($grades) {
    $gradesArr = $grades;
    $roundGrades = [ ];

    foreach($gradesArr as $gradeValue) {

      $isMultipleOfFive = ($gradeValue + 2) / 5;
      $isMultipleOfFiveTwo = ($gradeValue + 1) / 5;

      if($gradeValue >= 38) {

        
          if ($isMultipleOfFiveTwo == 0 or is_int($isMultipleOfFiveTwo)) {
            array_push($roundGrades, $gradeValue + 1);

          } elseif($isMultipleOfFive == 0 or is_int($isMultipleOfFive)){ 
            array_push($roundGrades, $gradeValue + 2);

          }else {

          array_push($roundGrades, $gradeValue);
  
        }

      } else {
        array_push($roundGrades, $gradeValue);
        
      }
        
    }

    var_dump($roundGrades);
  }

  $studentsGrades = [79, 67, 38, 33];
  gradingStudents($studentsGrades);