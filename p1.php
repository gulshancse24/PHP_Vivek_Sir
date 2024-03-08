<head><link rel="stylesheet" href="style.css"></head>
<body>
    <section><h1 class=p1>
        <br><br>
<?php
    echo "Welcome to PHP!";
    echo "<br><br>
    <pre>
&LeftAngleBracket;?php

echo 'Welcome to PHP!';

?&RightAngleBracket;
</pre>";
?></h1>
<center>
            <button onclick="click_event()" onmouseover="click_event()" id=btn >
                <a onclick="click_event()" onmouseover="click_event()" onmouseout=click2() href="day2.php" target=_self>Go Back &leftarrow;</a>
            </button>
        </center>
</section>  
</body>
<style>
    .p1{
   font-size: 50px !important;
   text-shadow:none;

}
pre{
    font-size:50px !important;
}
</style>