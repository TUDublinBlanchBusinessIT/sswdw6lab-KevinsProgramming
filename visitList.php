<?php

include("dbcon.php");

$sql = "SELECT visit.visit_date, visit.visit_time, patient.firstname AS PatientFirstName, patient.surname AS PatientSurname doctor.Firstanme, doctor.Surname, doctor.specialist FROM visit
INNER JOIN patient ON
visit.patient_id = patient.id
INNER JOIN doctor ON
visit.doctor_id = doctor.id";


$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
    $vdate = $row['visit_date'];
    $vtime = $row['visit_time'];
    $piname = $row['PatientFirstname'];
    $pisurn = $row['PatientSurname'];
    $dfname = $row['Firstname'];
    $dsurn = $row['Surname'];
    $dspecial = $row['Specialism'];
    


    echo "<TR><TD>$vdate</TD><TD>$vtime</TD><TD>$piname</TD><TR><TD>$pisurn</TD><TR><TD>$dfname</TD><TR><TD>$dsurn</TD><TR><TD>$dspecial</TD>";    
}
mysqli_close($conn);
?>