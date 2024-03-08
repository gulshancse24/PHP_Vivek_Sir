<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>

        <div id="program1">
            <h1 class=p1>
                <br>
                <center>Arithmetic Operator</center><br>
                <center class=center>
                    <h1 class=p1>+ (Addition) Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>- (Substraction) Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>/ (Divisioin) Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>* (Multiplication) Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>% (Modulas) Operator</h1>
                </center>
            </h1>
            <br>
            <div class="programop">
                <div>
                    <?php
        $a=10;
        $b=30;
        $sum = $a+$b;
        echo "Sum of $a and $b = $sum";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=30;
$sum = $a+$b;
echo "Sum of $a and $b = $sum";
?&RightAngleBracket;</pre>
                </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <?php
        $a=10;
        $b=30;
        $sum = $a-$b;
        echo "Subtraction of $a and $b = $sum";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=30;
$sum = $a-$b;
echo "Sub of $a and $b = $sum";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <?php
        $a=5;
        $b=10;
        $sum = $a/$b;
        echo "Division of $a and $b = $sum";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=5;
$b=10;
$sum = $a/$b;
echo "Div of $a and $b = $sum";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <?php
        $a=10;
        $b=30;
        $sum = $a*$b;
        echo "Multiplication of $a and $b = $sum";
    ?><br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=30;
$sum = $a*$b;
echo "Multi of $a and $b = $sum";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <?php
        $a=10;
        $b=3;
        $sum = $a%$b;
        echo "Mod of $a and $b = $sum";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=3;
$sum = $a%$b;
echo "Mod of $a and $b = $sum";
?&RightAngleBracket;</pre>
                </div>
            </div>
        </div>
        <div id="program2">
            <h1 class=p1>
                <br>
                <center>Assignment Operator</center><br>
                <center class=center>
                    <h1 class=p1>+ Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>- Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>/ Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>* Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>% Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>** Operator</h1>
                </center>
            </h1>
            <br>
            <div class="programop">
                <div>
                    <!-- addition -->
                    <?php
        $a=10;
        $b=10;
        $b+=$a;
        echo "1st variable= $a <br> After doing += is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b+=$a;
echo "1st variable= $a<br>After doing += is $b.";
?&RightAngleBracket;</pre>
                </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div>
                    <!-- sbustraction -->
                    <?php
        $a=10;
        $b=10;
        $b-=$a;
        echo "1st variable= $a <br> After doing -= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b-=$a;
echo "1st variable= $a<br>After doing -= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- division operator -->
                    <?php
        $a=10;
        $b=10;
        $b/=$a;
        echo "1st variable= $a <br> After doing /= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b/=$a;
echo "1st variable= $a<br>After doing /= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- multiplication operator -->
                    <?php
        $a=10;
        $b=10;
        $b*=$a;
        echo "1st variable= $a <br> After doing *= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b*=$a;
echo "1st variable= $a<br>After doing *= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- modulas operator -->
                    <?php
        $a=10;
        $b=10;
        $b%=$a;
        echo "1st variable= $a <br> After doing %= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b%=$a;
echo "1st variable= $a<br>After doing %= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- exponential -->
                    <?php
        $a=10;
        $b=10;
        $b**=$a;
        echo "1st variable= $a <br> After doing **= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b**=$a;
echo "1st variable= $a<br>After doing **= is $b.";
?&RightAngleBracket;</pre>
                </div>
            </div>
        </div>



        <div id="program2">
            <h1 class=p1>
                <br>
                <center>Comparison Operator</center><br>
                <center class=center>
                    <h1 class=p1>== Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>!= Operator</h1>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <h1 class=p1>
                        <= Operator</h1>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <h1 class=p1>>= Operator</h1>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <h1 class=p1>> Operator</h1>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <h1 class=p1>
                                < Operator</h1>
                </center>
            </h1>
            <br>
            <div class="programop">
                <div>
                    <!-- addition -->
                    <?php
        $a=10;
        $b=10;
        $b+=$a;
        echo "1st variable= $a <br> After doing += is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b+=$a;
echo "1st variable= $a<br>After doing += is $b.";
?&RightAngleBracket;</pre>
                </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <div>
                    <!-- sbustraction -->
                    <?php
        $a=10;
        $b=10;
        $b-=$a;
        echo "1st variable= $a <br> After doing -= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b-=$a;
echo "1st variable= $a<br>After doing -= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- division operator -->
                    <?php
        $a=10;
        $b=10;
        $b/=$a;
        echo "1st variable= $a <br> After doing /= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b/=$a;
echo "1st variable= $a<br>After doing /= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- multiplication operator -->
                    <?php
        $a=10;
        $b=10;
        $b*=$a;
        echo "1st variable= $a <br> After doing *= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b*=$a;
echo "1st variable= $a<br>After doing *= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- modulas operator -->
                    <?php
        $a=10;
        $b=10;
        $b%=$a;
        echo "1st variable= $a <br> After doing %= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b%=$a;
echo "1st variable= $a<br>After doing %= is $b.";
?&RightAngleBracket;</pre>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div>
                    <!-- exponential -->
                    <?php
        $a=10;
        $b=10;
        $b**=$a;
        echo "1st variable= $a <br> After doing **= is $b.";
    ?>
                    <br>
                    <pre>&LeftAngleBracket;?php
$a=10;
$b=10;
$b**=$a;
echo "1st variable= $a<br>After doing **= is $b.";
?&RightAngleBracket;</pre>
                </div>
            </div>
        </div>



        <center>
            <button onclick="click_event()" onmouseover="click_event()" id=btn>
                <a onclick="click_event()" onmouseover="click_event()" onmouseout=click2() href="day2.php"
                    target=_self>Go Back &leftarrow;</a>
            </button>
        </center>
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
    font-size: 15px !important;
}
</style>
<script src=script.js>
</script>