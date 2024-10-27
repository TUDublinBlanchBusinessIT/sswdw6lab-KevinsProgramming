<?php

include("dbcon.php");

$sql = "SELECT 
            visit.visit_date AS VisitDate, 
            visit.visit_time AS VisitTime, 
            patient.firstname AS PatientFirstname, 
            patient.surname AS PatientSurname, 
            doctor.firstname AS DoctorFirstname, 
            doctor.surname AS DoctorSurname, 
            doctor.specialism AS Specialism 
        FROM visit
        INNER JOIN patient ON visit.patient_id = patient.id
        INNER JOIN doctor ON visit.doctor_id = doctor.id";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $vdate = $row['VisitDate'];
    $vtime = $row['VisitTime'];
    $piname = $row['PatientFirstname'];
    $pisurn = $row['PatientSurname'];
    $dfname = $row['DoctorFirstname'];
    $dsurn = $row['DoctorSurname'];
    $dspecial = $row['Specialism'];

    echo "<tr>
            <td>$vdate</td>
            <td>$vtime</td>
            <td>$piname</td>
            <td>$pisurn</td>
            <td>$dfname</td>
            <td>$dsurn</td>
            <td>$dspecial</td>
          </tr>";
}

mysqli_close($conn);
?>
