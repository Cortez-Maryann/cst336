
$('Submit').onclick = function(){
    var total_score = 0;
   if ( $('question1').val() == 1994){
       total_score++;
       $("question1-feedback").html("you got the answer right!");
   }
   if($('question2').val() == 'C'){
       total_score++;
       $('#question2-feedback').html("You got the answer right!");
   }
   if($('question3').val() == 'A'){
       total_score++;
       $('#question3-feedback').html("ya, right!");
   }
   if($('question4').val() == "B"){
       total_score++;
       $('#question4-feedback').html("Ya, did it!");
   }
   $('score').append(total_score);
}