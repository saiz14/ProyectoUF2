$( document ).ready(function() {
    $('#register').click(function(){
        $('.registerData').show();
        $('#type').val('register');
    })
    $('#login').click(function(){
        $(".registerData input").prop('required',false);
        $('.registerData').hide();

        $('#type').val('login');
        
    })
    $('#button_send').click(function(){
        
        $type=$('#type').val();
        
        if($type=='register'){
            if($('#pass').val() == $('#password_val').val() && $('#pass').val()!= '' && $('#password_val') != ''){
                if($('#name').val() != '' && $('#surname').val() != '' && $('#correo').val()){
                    $('#form').submit();
                }else{
                  
                    alert('Debe completar todos los datos');
                }
            }else{
                alert('Las contraseñas deben coincidir')
            }
        }else{
            if($('#correo').val() != '' && $('#pass').val() != ''){
                $('#form').submit();
            }else{
                alert('completa todos los datos')
            }
        }
    })
});
