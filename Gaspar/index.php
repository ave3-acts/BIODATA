<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
            font-family: serif;
            margin:1rem auto;
            width:fit-content;
            margin-left: auto;
            margin-right:  auto;
            font-size: 150%;
            margin-top: 1%;
            color: aliceblue;
            background-image: url(../Gaspar/_Images/Landscape.jpg);
        }
        td{
            padding-left: 1%;
            padding-top: 1%;
            padding-bottom: 1%;
            padding-right: 1%;
        }
        form{
            background-color: hsla(0, 0%, 0%, 0.5); /* Adjust the alpha value (0.5) for transparency */
            padding: 20px;
            border-radius: 10px;
            border: 2px solid;
            border-color: rgb(255, 254, 254);
        }
        form input[type="text"], input[type="password"],input[type="date"],input[type="email"] {
        background-color: rgba(251, 250, 249, 0.4);  /*Adjust the alpha value (0.1) for transparency */
        border: 1px solid rgb(26, 15, 15);
        padding: 5px;
        border-color: rgb(255, 254, 254);
        }
        table{
            height: 100%;
        }
        button{
            padding: 10px 35px;
            background-color:black;
            color:white;
            border-radius:15px;
            height:30px;
            border:none;
        }
        button:hover{
            

        }

        
    </style>
</head>
<body>
    <form method="post" action="display.php">
        <legend style="font-size: 150%; text-align: center;" ><b>BIODATA</b></legend>
            <table>
                <h2><I>Personal Informations:</I></h2>
                <tr>
                    <td><label>Complete Name:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="3" placeholder="CompleteName" name="CompleteName" required></td>
                </tr>
                <tr>
                    <td><label>Birth Date</label></td>
                </tr>
                <tr>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <td><label>City Address:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="3" placeholder="City Address" name="CityAddress" required></td>
                </tr>
                <tr>
                    <td><label>Cellphone Number:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="3" placeholder="Cellphone Number" name="CellphoneNumber" required></td>
                </tr>
                <tr>
                    <td><label>Civil Status:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="3" placeholder="Civil Status" name="CivilStatus" required></td>
                </tr> 
            </table>
            <table>
                <h2><I>Educational Background:</I></h2>
                <tr>
                    <td><label>Elementary:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="5" placeholder="Elementary School" name="Elementary" required></td>
                </tr>
                <tr>
                    <td><label>HighSchool:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="5" placeholder="Elementary School" name="HighSchool" required></td>
                </tr>
                <tr>
                    <td><label>College:</label></td>
                </tr>
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="5" placeholder="Elementary School" name="College" required></td>
                </tr>
            </table>
            <table>
                 <h2><I>Skills/Habits/Hobbies</I></h2>
                
                <tr>
                    <td><input type="text" maxlength="25" size="50" minlength="5" placeholder="Skills/Habits/Hobbies" name="Skills" required></td>
                </tr>

                <tr>
                    <td><button name="submit">Submit</button></td>
                </tr>
           </table>



        
    </form>
</body>
</html>