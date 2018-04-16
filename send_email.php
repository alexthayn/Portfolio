<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alex Thayn</title>
        <meta name="description" content="Alex Thayn's Porfolio.">
        <link rel="stylesheet" href="CSS/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    </head>
    <body id="formSubmitted">
        <header class="nav-down">
            <div class="navWrapper">
                <div class="navbar1">
                    <ul id="top-menu">
                        <li>
                            <a href="index.html">HOME</a>
                        </li>
                        <li>
                            <a href="about.html">ABOUT</a>
                        </li>
                        <li>
                            <a href="project.html">PROJECTS</a>
                        </li>
                        <li class="active">
                            <a href="contact.html">CONTACT</a>
                        </li>
                         
                        <li id="linkedinlogo" style="float: right;"><a  id="linkedin" href="https://www.linkedin.com/in/alex-thayn"></a></li>
                    </ul>
                </div>
            </div>
        </header>
    

        <div id="formsent">
            <?php
                $fname = $_POST['last_name'];
                $lname = $_POST['first_name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                
                
                $mysqli = new mysqli("localhost", "alexthay_1", "password", "alexthay_1");
                        
                $insertStmt ="INSERT INTO emails (LastName, FirstName, Email, Message) VALUES ('" . $lname . "','" . $fname . "','" . $email . "','" . $message ."')";
                
       
                if($mysqli->query($insertStmt)=== TRUE){
                    echo "Thank You! Your message was sent.";
                }else{
                    echo "Error: " . $insertStmt . "<br>" . $mysqli->error;
                }
                
                $mysqli->close();
                
            ?>
        </div>
    </body>
</html>

