click_me = document.getElementById('btn');
function click_event() {
    document.getElementById('btn').style = "margin-right:-3px;box-shadow:none;margin-bottom:-10px;";
    // document.getElementById('btn').style = "box-shadow:none;";
}
function click2() {
    setTimeout(function ()
    {
        click_me.style="box-shadow:10px 5px 5px brown; margin-right:3px;margin-bottom:10px;";
    },100
    );
}
day= document.getElementById("no_cnt");
function setemoji(){
    setTimeout(function ()
    {
        day.innerHTML= "<img src=001.svg height=500 width=500>";
    },2000
    );
}
// ques dropdown
function change_output(){
    if (x == 1) {
        alert("Alert This is Danger!");
        // program1.innerHTML = "hello there!";
        console.log("Hello");
    }
}