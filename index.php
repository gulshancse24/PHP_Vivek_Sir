<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP By Vivek Sir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php
            echo "<center>
                    <h1>Day_1:- PHP </h1>
                </center>
                <br>
                <hr>";
            echo "<ol type=1>
                    <li>
                        <b>Easy to Use :-</b>
                        <span>
                        It is easy to use beacuse of its syntax. User/programmer can understand the code of PHP
                        easily. let's see an example of PHP program to print <i>`Hello, World!`</i>
                    </span>
                    <br>
                </li>";
            echo "<br>
            <pre>
            &LeftAngleBracket;?php
                echo 'Hello, World!';
            ?&RightAngleBracket;
            </pre>";
            echo "<li>
                    <b>Open Source :-</b>
                    <span>
                        It is freely available tool for <i>Back-end programing</i>. Any one can access PHP for Back-End programing or <i><u>Server-Side Scripting</u></i>. <mark>User don't needed to pay for it.</mark>
                    </span>
                    <br>
                </li>
                <br>";
            echo "<li>
                    <b>Platform Independent :-</b>
                    <span>
                    PHP code is paltform independent beacuse of it's code can execute on any Operating system / platform, <br>
                    <i>As example, i have written a code on linux platform / operating system's IDE, I wanted to run it or execute it on MacOS, It will executed on MacOs.</i>
                    </span>
                    <br><br>
                </li>";
            echo "<li>
                    <b>Integration with Different Technology :-</b>
                    <span>
                        It can integrate it self with different technology such as MySQL, MongoDB... etc, PHP includes some Functions and libraries for Make connections with MySQL and other Technology Connections.
                    </span>
                    <br><br>
                </li>";
            echo "<li>
                    <b>Connection With DataBase :-</b>
                    <span>
                    PHP can connect it self with DataBase easily, user can make Database connection with the help of PHP codes. User don't need to write huge ammount of code to connect DataBase using PHP, User can write only few lines of code for Database Connection. 
                    </span>
                    <br><br>
                </li>";
            echo "<li>
                    <b>Flexability and Scalability :-</b>
                    <div class='para'>
                        <ul>
                        <li>
                            PHP is a Flexible programing language, It means user can make changes in their code easily.
                        </li>
                        <li>
                            User can make Web-Applications, Websites, Command-Line Scripts or Even Desktop Application with the help of PHP.
                        </li>
                        <li>
                            Scalability, It means user can add more content as respect to their needed.
                        </li>
                        <li>
                            Users can efficiently manage their servesr resources, by wchich the performance of their Web-Application can improve.
                        </li>            
                    </div>
                    <br><br>
                </li>";
            echo "</ol>";
        ?>
        <center>
            <button onclick="click_event()" onmouseover="click_event()" id=btn >
                <a onclick="click_event()" onmouseover="click_event()" onmouseout=click2() href="day2.php" target=_self>Day 2 PHP</a>
            </button>
        </center>
    </section>
</body>
<script src="script.js"></script>
</html>