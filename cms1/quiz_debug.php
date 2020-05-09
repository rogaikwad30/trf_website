    <?php
/*Things to do
    1)timer
    2)set quiz id and user id through sessions also replace the variable in the code
    */
    require('includes/header.php'); 
  require('includes/db.php'); 


  if(isset($_SESSION['user_id']))
  {
    $quizId=$_GET['bid'];
       $qry1="SELECT * FROM `quiz` WHERE `quizId`='$quizId'";
      $runn = mysqli_query($connection, $qry1);
       $row=mysqli_fetch_assoc($runn);
      $time=$row['duration'];
      $arr=explode(':',$time);
      //print_r($arr);
      
    $seconds=($arr[0]*3600)+($arr[1]*60) +$arr[2];
      //echo $seconds;
    $qry = "SELECT `quizId`, `questionId`, `questions`, `optionA`, `optionB`, `optionC`, `optionD`, `correctOption` FROM `quizquestion` WHERE `quizId` = '$quizId'";
 $run = mysqli_query($connection, $qry);
 $nn = mysqli_num_rows($run);
 $nnc=1;
 $arr=array();
 $p=1;
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="quiz_style2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="current_question()" style="padding-top:10px;">
    <h1 style="text-align: center; color: #E9ECEF; font-family: 'potra'; margin-top: 2%; margin-bottom:3%; font-size: 50px;" >THE ROBOTICS FORUM</h1>
    <div  class="container">

        <div class="row">

            <div class="col-md-8">

                <div class="timer">

                    <h1 id="timmr"style="font-size:40px;"><?php echo $row['duration']; ?></h1>
                </div>

                <div class="ques">
                    <h2>Q <span id="question_num">01</span>) <span id="question_title"></span></h2>
                    <div class="left_option">

                            <input type="radio" name="option" id="a"  value="a">
                            <label class="op"></label>
                    </div>
                    <div class="left_option">
                            <input type="radio" name="option" id="b"  value="b">
                            <label class="op"></label>
                        <br>
                    </div>
                    <div class="left_option">
                            <input type="radio" name="option" id="c"  value="c">
                            <label class="op"></label>
                    </div>
                    <div class="left_option">
                            <input type="radio" name="option" id="d"  value="d">
                            <label class="op"></label>
                        <br>
                    </div>




                    <button type="submit" id="prev" onclick="prevFunction()">Previous</button>
                    <button type="submit" id="review" onclick="markFunction()">Mark for Review</button>
                    <button type="submit" id="next" onclick="nextFunction()">Next</button>
                </div>

                <div>
                   <form id="sampleForm" name="sampleForm" method="post" action="check.php">
                    <input type="hidden" name="total" id="total" value="">
                    <input type="hidden" name="quiz_id" id="quiz_id" value="<?php echo $quizId; ?>">
                <div>
                    <button type="submit" name="submit" id="subbtn" class="submit_btn" onclick="submitFunction();">
                        SUBMIT
                    </button>
                </div>
            </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="quiz-title">
                    <h3 style="text-align: center ;color:white;">QUIZ TITLE</h3>
                </div>
                <?php
                $qry3 = "SELECT `quizId`, `questionId`, `questions`, `optionA`, `optionB`, `optionC`, `optionD`, `correctOption` FROM `quizquestion` WHERE `quizId` = '$quizId'";
                $run3 = mysqli_query($connection, $qry);
                $n=mysqli_num_rows($run3);

                $z=10;
                ?>
                <div class="num">
                    <button class="quesno" type="button" style="display:none;">01</button>
                    <button class="quesno" type="button" style="display:none;">02</button>
                    <button class="quesno" type="button" style="display:none;">03</button>
                    <button class="quesno" type="button" style="display:none;">04</button>
                    <button class="quesno" type="button" style="display:none;">05</button>
                    <button class="quesno" type="button" style="display:none;">06</button>
                    <button class="quesno" type="button" style="display:none;">07</button>
                    <button class="quesno" type="button" style="display:none;">08</button>
                    <button class="quesno" type="button" style="display:none;">09</button>
                    <?php while($z<=$n){ ?>
                    <button class="quesno" type="button" ><?php
                        echo $z;
                         $z=$z+1; ?> </button>


                     <?php }       //while closes  ?>


                </div>

            </div>



        </div>

    </div>
</body>

<script>
    window.onbeforeunload = function(){
        return "BATMAN!";
    };
    var upgradeTime = "<?php echo $seconds ?>"-1;
    var seconds = upgradeTime;
    function timer() {
      var days        = Math.floor(seconds/24/60/60);
      var hoursLeft   = Math.floor((seconds) - (days*86400));
      var hours       = Math.floor(hoursLeft/3600);
      var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
      var minutes     = Math.floor(minutesLeft/60);
      var remainingSeconds = seconds % 60;
      function pad(n) {
        return (n < 10 ? "0" + n : n);
      }
      document.getElementById('timmr').innerHTML = pad(hours) + ":" + pad(minutes) + ":" + pad(remainingSeconds);
      if (seconds == 0) {
        clearInterval(countdownTimer);
          document.getElementById("subbtn").click();
      } else {
        seconds--;
      }
    }
    var countdownTimer = setInterval('timer()', 1000);
    <?php
   $quizId=$_GET['bid'];
     
      
    $qry = "SELECT `quizId`, `questionId`, `questions`, `optionA`, `optionB`, `optionC`, `optionD`, `correctOption` FROM `quizquestion` WHERE `quizId` = '$quizId'";
 $run = mysqli_query($connection, $qry);
 $nn = mysqli_num_rows($run);
 $nnc=1;
 ?>


    var questions = [
    <?php while($nnc<$nn) {
        $data=mysqli_fetch_assoc($run);?>
    [ " <?php echo $data['questions']; ?><script>", " <?php echo $data['optionA']; ?> ", " <?php echo $data['optionB']; ?> ", "<?php echo $data['optionC']; ?>","<?php echo $data['optionD']; ?>"],
    <?php $nnc++; }
    $data=mysqli_fetch_assoc($run);
     ?>
     [ " <?php echo $data['questions']; ?><script>", " <?php echo $data['optionA']; ?> ", " <?php echo $data['optionB']; ?> ", "<?php echo $data['optionC']; ?>","<?php echo $data['optionD']; ?>"]
];

    var rad_ans = [];
    for(var r=0; r<20; r++){
        rad_ans[r] = 0;
    }
    var quesnums = document.getElementsByClassName("quesno");
    var current_ques = document.getElementById("question_num");
    var numrows = <?php echo $n; ?> ;
    for(var tp=0; tp<numrows; tp++){
       quesnums[tp].style.display="inline";
   }

var col;
    
    for (var i=0; i<quesnums.length; i++){
        
        
        quesnums[i].addEventListener('click',function(){
            
            for(var j=0; j<quesnums.length; j++){
                
            if(current_ques.innerHTML==quesnums[j].innerHTML){
                
                var chx = document.getElementsByName('option');
                for (var t=0; t<chx.length; t++) {
                    
                    if (chx[t].checked) {
                            if(quesnums[j].style.color!="rgb(251, 43, 17)"){

                                quesnums[j].style.backgroundColor="#343A40";
                                quesnums[j].style.color="#39ff14";
                                col="green";
                                quesnums[j].style.boxShadow="1px 1px 10px 2px #39ff14";
                            }
                            rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        break;
                    }
                }
                if(col!="green" && quesnums[j].style.color!="rgb(251, 43, 17)"){
                    quesnums[j].style.backgroundColor="#343A40";
                    quesnums[j].style.color="#E9ECEF";
                    quesnums[j].style.boxShadow="1px 1px 10px 2px #4d4dff";
                }
                col="";
            }
        }
            for (var t=0; t<chx.length; t++) {
                        chx[t].checked = false;
                    }
            
            current_ques.innerHTML= this.innerHTML;
            current_question();
    });
}
    
    function current_question(){
        
        var quest = document.getElementById('question_title');
        
        for(var i=0; i<quesnums.length; i++){
                
            if(current_ques.innerHTML==quesnums[i].innerHTML){
                
                quest.innerHTML=questions[parseInt(current_ques.innerHTML)-1][0];
                var opt=document.getElementsByClassName('op');
                for(var z=0;z<opt.length;z++){
                    opt[z].innerHTML=questions[parseInt(current_ques.innerHTML)-1][z+1];
                    
                }
                
                quesnums[i].style.backgroundColor="#343A40";
                quesnums[i].style.color="#ccff00";
                quesnums[i].style.boxShadow="1px 1px 10px 2px #ccff00";
            }
        }
                var chk = document.getElementsByName('option');
                for(var k=0; k<chk.length;k++){
                    if(chk[k].value==rad_ans[parseInt(current_ques.innerHTML)-1]){
                        chk[k].checked=true;
                        break;
                    }
                }
        
    }
    
    function nextFunction(){
        if(current_ques.innerHTML==numrows){
                return(0);
           }
        for(var i=0; i<quesnums.length; i++){
                
            if(current_ques.innerHTML==quesnums[i].innerHTML){
                
                var chx = document.getElementsByName('option');
                for (var t=0; t<chx.length; t++) {
                    
                    if (chx[t].checked) {
                        if(quesnums[i].style.color!="rgb(251, 43, 17)"){
                            quesnums[i].style.backgroundColor="#343A40";
                            quesnums[i].style.color="#39ff14";
                            quesnums[i].style.boxShadow="1px 1px 10px 2px #39ff14";
                            rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        }
                    
                        break;
                    }
                    else if(quesnums[i].style.color=="rgb(251, 43, 17)"){
                        break;
                    }
                    else{
                        quesnums[i].style.backgroundColor="#343A40";
                        quesnums[i].style.color="#E9ECEF";
                        quesnums[i].style.boxShadow="1px 1px 10px 2px #4d4dff";
                    }
                }
                
                
                if(quesnums[i+1].innerHTML[0]=="0"){
                    console.log(quesnums[i].innerHTML[0]);
                    current_ques.innerHTML = "0"+ String(parseInt(current_ques.innerHTML)+1);
                    
                    var chx = document.getElementsByTagName('input');
                    for (var t=0; t<chx.length; t++) {
                        chx[t].checked = false;
                    }
                    
                    current_question();
                }
                else{
                    current_ques.innerHTML = parseInt(current_ques.innerHTML)+1;
                    var chx = document.getElementsByTagName('input');
                    for (var t=0; t<chx.length; t++) {
                        chx[t].checked = false;
                    }
                    
                    current_question();
                }
                break;
            } 
        }
    }
    
    function markFunction(){
        for(var i=0; i<quesnums.length; i++){
                
            if(current_ques.innerHTML==quesnums[i].innerHTML){
                    quesnums[i].style.backgroundColor="#343A40";
                    quesnums[i].style.color="#FB2B11";
                    quesnums[i].style.boxShadow="1px 1px 10px 2px #FB2B11";
            }
        }
        var chx = document.getElementsByName('option');
                for (var t=0; t<chx.length; t++) {
                    
                    if (chx[t].checked) {
                            rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        break;
                    }
                }
    }
    
    function prevFunction(){
        if(current_ques.innerHTML=="01"){
            return(0);
        }
        for(var i=0; i<quesnums.length; i++){
                
            if(current_ques.innerHTML==quesnums[i].innerHTML){
                if(quesnums[i-1].innerHTML[0]=="0"){
                    
                    if(quesnums[i].style.color!="rgb(251, 43, 17)"){
                        quesnums[i].style.backgroundColor="#343A40";
                        quesnums[i].style.color="#E9ECEF";
                        quesnums[i].style.boxShadow="1px 1px 10px 2px #4d4dff";
                    }
                
                var chx = document.getElementsByName('option');
                for (var t=0; t<chx.length; t++) {
                    
                    if (chx[t].checked) {
                            rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        break;
                    }
                }
                    for (var t=0; t<chx.length; t++){
                        if(chx[t].checked && quesnums[i].style.color!="rgb(251, 43, 17)"){
                            quesnums[i].style.backgroundColor="#343A40";
                            quesnums[i].style.color="#39ff14";
                            quesnums[i].style.boxShadow="1px 1px 10px 2px #39ff14";
                        }
                    }
                    
                    for (var t=0; t<chx.length; t++){
                        chx[t].checked=false;
                    }
                    current_ques.innerHTML = "0"+ String(parseInt(current_ques.innerHTML)-1);
                    current_question();
                }
                else{
                    if(quesnums[i].style.color!="rgb(251, 43, 17)"){
                        quesnums[i].style.backgroundColor="#343A40";
                        quesnums[i].style.color="#E9ECEF";
                        quesnums[i].style.boxShadow="1px 1px 10px 2px #4d4dff";
                    }
                
                var chx = document.getElementsByName('option');
                for (var t=0; t<chx.length; t++) {
                    
                    if (chx[t].checked) {
                            rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        break;
                    }
                }
                    for (var t=0; t<chx.length; t++){
                        if(chx[t].checked && quesnums[i].style.color!="rgb(251, 43, 17)"){
                            quesnums[i].style.backgroundColor="#343A40";
                            quesnums[i].style.color="#39ff14";
                            quesnums[i].style.boxShadow="1px 1px 10px 2px #39ff14";
                        }
                    }
                    for (var t=0; t<chx.length; t++){
                        chx[t].checked=false;
                    }
                    current_ques.innerHTML = parseInt(current_ques.innerHTML)-1;
                    current_question();
                }
            }
        }
    }
    function submitFunction(){


        var chx = document.getElementsByName('option');
                for (var t=0; t<chx.length; t++) {

                    if (chx[t].checked) {
                        rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        break;
                    }
                }


        var s="";
        for(var u=0;u<rad_ans.length;u++){
            s=s+rad_ans[u]+",";
        }
        var chx = document.getElementsByName('option');
        for (var t=0; t<chx.length; t++) {

                    if (chx[t].checked) {
                        rad_ans[parseInt(current_ques.innerHTML)-1]=chx[t].value;
                        break;
                    }
        }
        document.sampleForm.total.value=s;
        document.forms["sampleForm"].submit();


    }

<?php
} else
{
    echo ("<script>window.alert('Please login to give Quiz');
	window.location.href='quiz_mainpage1.php';
	</script>");
	
} ?>

</script>

</html>
