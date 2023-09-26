<?php 
    function findAvgGrade($studentGrades){  //function to find average grade of each student from $studentGrades
        
        foreach($studentGrades as $studentName=>$studentGrade){ //repeat for each student
            $sumGrades = array_sum($studentGrade); //sum of grades of current student 
            $numSubjects = count($studentGrade); //count number of subjects
            //$avg = $sumGrades/$numSubjects;
            $avg = round($sumGrades/$numSubjects); //calculate average and round it
            echo "The average grade of {$studentName}: {$avg}.\n"; // print the average of current student
        }
    }
    $studentGrades = [  //associative array of students grades
        'Student1' => [
            'Math' => 92,
            'English' => 78,
            'Science' => 87,
        ],
        'Student2' => [
            'Math' => 84,
            'English' => 83,
            'Science' => 80,
        ],
        'Student3' => [
            'Math' => 95,
            'English' => 82,
            'Science' => 89,
        ],
    ];
    findAvgGrade($studentGrades); //call findAvgGrade function to find average
?>