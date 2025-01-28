<?php

include 'db.php';

$query = "SELECT * FROM login";
$result = $conn->query($query);

if(!$result){
    die("Query deshtoi" .$conn->error);
}
$query = "SELECT * FROM register";
$result2 = $conn->query($query);

if(!$result2){
    die("Query deshtoi" . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
   
    <div class="dashboard-title">
        <h1>Dashboard</h1>
    </div>

    <div class="titlee">
        <h4>Perdoruesit e Regjistruar</h4>
    </div>

 
    <div class="dash-resp">
        <div class="dashboard-table">
            <table class="dash-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Koha e krijuar</th>
                    </tr>
                </thead>
                <tbody>
              
                <?php if($result2->num_rows>0): ?>
                    <?php while($row = $result2->fetch_assoc()): ?>
                        <tr>
                            <td><?=htmlspecialchars($row['UserID']);?></td>
                            <td><?=htmlspecialchars($row['Name']);?></td>
                            <td><?=htmlspecialchars($row['Email']);?></td>
                            <td><?=htmlspecialchars($row['Password']);?></td>
                            <td><?=htmlspecialchars($row['CreatedAt']);?></td>
                        </tr>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <tr><td colspan="5">Nuk ka te dhena per kete tabele.</td></tr>
                        <?php endif; ?>
                    </tbody>
            </table>
        </div>
    </div>

    <div class="titlee">
        <h4>Contact Table</h4>
    </div>

    <div class="contact-table">
        
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
             </thead>
            </tbody>
            <?php if($result->num_rows>0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?=htmlspecialchars($row['ID']);?></td>
                            <td><?=htmlspecialchars($row['Name']);?></td>
                            <td><?=htmlspecialchars($row['Email']);?></td>
                            <td><?=htmlspecialchars($row['Subject']);?></td>
                            <td><?=htmlspecialchars($row['Message']);?></td>
                        </tr>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <tr><td colspan="5">Nuk ka te dhena per kete tabele.</td></tr>
                        <?php endif; ?>
                    </tbody>
        </table>
    </div> 

    </body>   
</html>