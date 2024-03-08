<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP By Vivek Sir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body onload="setemoji()">
    <section>
        <?php
        echo "<center>
                <h1>Day_2:- PHP </h1>
            </center><br><hr>";
    ?>

        <?php
    echo "<a class=que href=p1.php>1. Program to Print 'Welcome To PHP'.</a>";?><a class=que onmouseover='show()'><?php
    echo "<br>2. Program using expressions and Operator.</a>";
    ?>
            <pre id=showque>

   <a href=p2.php onclick=change_output()>1. Arithmetic operators.</a><br>
   <a href=p2.php onclick=change_output()>2. Assignment operators.</a><br>
   <a href=p2.php onclick=change_output()>3. Comparison operators.</a><br>
   <a href=p2.php onclick=change_output()>4. Increment/Decrement operators.</a><br>
   <a href=p2.php onclick=change_output()>5. Logical operators.</a><br>
   <a href=p2.php onclick=change_output()>6. String operators.</a><br>
   <a href=p2.php onclick=change_output()>7. Array operators.</a><br>
   <a href=p2.php onclick=change_output()>8. Conditional Assignment operators.</a>
    </pre>
            <br><a class=que href=if.php>3. Program using if statement.</a>
            <center>
                <button onclick="click_event()" onmouseover="click_event()" id=btn>
                    <a onclick="click_event()" onmouseover="click_event()" onmouseout=click2() href="day3.php"
                        target=_self>Day 3 PHP</a>
                </button>
            </center>
            <!-- <div class=no_cnt>
        <h1 id =no_cnt>
            Sorry! No Content Available...
        </h1>
    </div> -->
    </section>
</body>
<script src="scriptpro.js"></script>
<script>
question = document.getElementById("showque");

function show() {
    question.style = "display:block;";
}
</script>

</html>
<style>
.que {
    color: black !important;
    font-size: 20px !important;
}

#showque {
    display: none;
}

pre a {
    font-size: 20px;
    color: black;
}
</style>