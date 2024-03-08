<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <br>

        <div class=programop>
            <div>
                <h1 class=p1> If statement
                </h1>
                <br>
                <pre>
&LeftAngleBracket;?php
$a=29;
if ($a < 100) {
    echo "Greater";
}
?&RightAngleBracket;
</pre>
                <h1 class=p1>
                    <?php
$a=29;
if ($a < 100) {

    echo "Greater";
}
?>
            </div>
            </h1>

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div>
                <h1 class=p1> If-else statement
                </h1>
                <br>
                <pre>
&LeftAngleBracket;?php
$a=209;
if ($a < 100) {
    echo "Greater";
}
else{
    echo "Smaller";
}
?&RightAngleBracket;
</pre>
                <h1 class=p1>
                    <?php
$a=209;
if ($a < 100) {
    echo "Greater";
}
else{
    echo "Smaller";
}
?>
            </div>
            </h1>

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div>
                <h1 class=p1> Switch statement
                </h1>
                <br>
                <pre>
&LeftAngleBracket;?php
$a =3;
switch($a){
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tuesday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "Thursday";
        break;
    case 6:
        echo "Friday";
        break;
    case 7:
        echo "Saturday";
        break;
}
?&RightAngleBracket;
</pre>
                <h1 class=p1>
                    <?php
$a =3;
switch($a){
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tuesday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "Thursday";
        break;
    case 6:
        echo "Friday";
        break;
    case 7:
        echo "Saturday";
        break;
}
?>
            </div>
            </h1>
        </div>
        <div class="btn">
            <center><button onclick="click_event()" onmouseover="click_event()" id=btn>
                    <a onclick="click_event()" onmouseover="click_event()" onmouseout=click2() href="day2.php"
                        target=_self>Go Back &leftarrow;</a>
                </button>
            </center>
        </div>
    </section>
</body>
<style>
.p1 {
    font-size: 22px !important;
    text-shadow: none !important;

}

.center,
.programop {
    display: flex;
    /* font-size: */
}

pre {
    font-size: 25px !important;
}
</style>