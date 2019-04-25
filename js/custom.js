$(document).ready(function () {
  
  $('.alert').fadeOut();
     function ok_func(data){

          
           $('.alert').fadeIn().removeClass('alert-danger').addClass('alert-success');
            $('.alert-texte').text('Merci ! Votre message a été envoyé');
        
           setTimeout(function () {
                 $('.alert').fadeOut();
          }, 2000);


            setTimeout(function () {
                      $('#modal').modal('show');
                   }, 2000);
                   $('#accept').click(function () {
                     $('#modal').modal('hide');
                     var name=$('#name').val(),
                          email=$('#email').val();
                        
                    $.post('user.php','userName=' + name + '&userEmail= ' +email,function(data){
                          alert(data);

                     })
                   })
                   $('#refuse').click(function () {
                     $('#modal').modal('hide');
                     $('#form').find('input:not([type="submit"]),textarea').val('');
                   })
              
                 
               
      }
    
      
    
        function bad_func(data)
      {
              $('.alert').fadeIn().removeClass('alert-success').addClass('alert-danger');
                    $('.alert-texte').text('Le formulaire a été mal remplie.Veuillez rééssayer');
                    setTimeout(function () {
                       $('.alert').fadeOut();
                   }, 2000);
                    $('#form').find('input:not([type="submit"]),textarea').val('');
                    

      }
  //on submit prevent the form from being submitted
  $('#form').on('submit',function (e) {
        e.preventDefault();   
      var $details=$(this).serialize();
      $.ajax({
            type: 'post',
            url: 'contact.php',
            data: $details
        })  
        .done(ok_func)
        .fail(bad_func)
       
           
     

         
    
  })
})


