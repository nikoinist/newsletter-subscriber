jQuery(document).ready(function($){
    $('#subscriber-form').submit(function(e){
       e.preventDefault();
       
       // serialize form
       var subscriberData = $('#subscriber-form').serialize();
       
       //submit for with ajax
       $.ajax({
           type: 'post',
           url: $('#subscriber-form').attr('action'),
           data: subscriberData
       
           
       }).done(function(response){
           //if success
           $('#form-msg').removeClass('error');
           $('#form-msg').addClass('success');
           
           //Set Message Text
           $('#form-msg').text(response);
           
           //clear Fields
           $('#name').val('');
           $('#email').val('');
       
           
       }).fail(function(data){
           //if fail
           $('#form-msg').removeClass('success');
           $('#form-msg').addClass('error');
           
           if(data.responseText !== ''){
                //Set Message Text
                $('#form-msg').text(data.responseText);    
           } else {
               $('#form-msg').text('Message was not sent!');
           }

       });
    });
});