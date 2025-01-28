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
    <?php include 'header.php'; ?>
    
    
    
    <div class="dashboard-title">
        <h1>Dashboard</h1>
    </div>

    <div class="titlee">
        <p>Perdoruesit e Regjistruar</p>
    </div>

 
    <div class="dash-resp">
        <div class="dashboard-table">
            <table class="dash-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <div class="titlee">
        <p>Contact Table</p>
    </div>

    <div class="contact-table">

        <!-- <p id="contact-msg">Contact Us Messages</p> -->
        
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
           
            </tr>
        </table>
    </div> 

    </body>   
</html>