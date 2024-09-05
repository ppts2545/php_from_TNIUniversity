<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "staff"; // Missing semicolon

    // Establishing connection
    $conn = mysqli_connect($host, $user, $pass, $db);

    $str = "select * from student ";
    $obj = mysqli_query($conn,$str);
?>

<table border=1>
    <tr>
        <th>FirstName</th>
        <th>NickName</th>
        <th>Midterm</th>
        <th>Final</th>
        <th>Total</th>
        <th>Grade</th>
    </tr>
 

<?php
    while($result = mysqli_fetch_array($obj)){
        echo "<tr>";
        echo "<td>".$result['fname']."</td>";
        echo "<td>".$result['nname']."</td>";
        echo "<td>".$result['mid_score']."</td>";
        echo "<td>".$result['final_score']."</td>";
        $total = $result['mid_score']+$result['final_score'];
        $grade = "F";

        if($total>=85){
            $grade = "A+";
        }
        else if($total>=80){
            $grade = "A";
        }
        else if($total>=75){
            $grade = "B+";
        }
        else if($total>=70){
            $grade = "B";
        }
        else if($total>=65){
            $grade = "C+";
        }
        else if($total>=60){
            $grade = "C";
        }
        else{
            $grade = "D";
        }

        echo "<td>". $total ."</td>";
        echo "<td>". $grade ."</td>";
        echo "</tr>";
    }
?>

</table>
