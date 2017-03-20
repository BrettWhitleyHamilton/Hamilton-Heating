$(document).ready(function(){
$("#contactForm").on('submit',function(){
    var forms=$('form#contactForm');
    console.log(forms.serialize());
    $.ajax({
      type:"POST",
      url:'php/email.php',
      data:forms.serialize(),

      success:function(d){
        console.log(d);
      }
    });
    return false;
  });
});