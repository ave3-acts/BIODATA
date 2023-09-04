<?php
 if (isset($_POST['submit'])){
    $CompleteName=$_POST['CompleteName'];
    $Date=$_POST['date'];
    $CityAddress=$_POST['CityAddress'];
    $CellphoneNumber=$_POST['CellphoneNumber'];
    $CivilStatus=$_POST['CivilStatus'];
    $Elementary=$_POST['Elementary'];
    $Highschool=$_POST['HighSchool'];
    $College=$_POST['College'];
    $CityAddress=$_POST['CityAddress'];
    $Skills=$_POST['Skills'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #8080ff;
            font-family: serif;
            margin:1rem auto;
            width:fit-content;
            margin-left: auto;
            margin-right:  auto;
            font-size: 150%;
            margin-top: 1%;
            background-image: url(../Gaspar/_Images/Landscape.jpg);
            color: aliceblue;
        }
        td{
           
        }
        
        table{
            height: 100%;
            
        }
        div{
            border: 2px solid;
            padding:20px;
            background-color: hsla(0, 0%, 0%, 0.5); /* Adjust the alpha value (0.5) for transparency */
            padding: 20px;
            border-radius: 10px;
            border: 2px solid;
            border-color: rgb(255, 254, 254);
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    
<div>
    <h1>BIODATA</h1>
<table>
                <tr>
                <td colspan="2"><h2><I>Personal Informations:</I></h2></td>
                </tr>
                <tr>
                    <td>Complete Name:</td>
                    <td><?php echo $CompleteName ?></td>
                </tr>
                <tr>
                    <td><label>Birth Date</label></td>
                    <td><?php echo $Date ?></td>
                </tr>
                <tr>
                    <td><label>City Address:</label></td>
                    <td><?php echo $CityAddress ?></td>
                </tr>
                <tr>
                    <td><label>Cellphone Number:</label></td>
                    <td><?php echo $CellphoneNumber ?></td>
                </tr>
                <tr>
                    <td><label>Civil Status:</label></td>
                    <td><?php echo $CivilStatus ?></td>
                </tr>
                
                <tr>
                <td colspan="2"><h2><I>Educational Background:</I></h2></td>
                </tr>
                <tr>
                    <td><label>Elementary:</label></td>
                    <td><?php echo $Elementary ?></td>
                </tr>
                <tr>
                    <td><label>HighSchool:</label></td>
                    <td><?php echo $Highschool ?></td>
                </tr>
                <tr>
                    <td><label>College:</label></td>
                    <td><?php echo $College ?></td>
                </tr>
                <tr>
                 <td colspan="2"><h2><I>Skills/Habits/Hobbies</I></h2></td>
                </tr>
                <tr>
                    <td><?php echo $Skills ?></td>
                </tr>
           </table>
    </div>
</body>
</html>