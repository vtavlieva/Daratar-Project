////////////////////////////////////Log in//////////////////////////////////////
function check_availability(){  
    var username = $('#username').val();
    var password = $('#password').val();
    $.ajax({
        method:"POST",
        url:base_url+"index.php/login/Login/user/",
        data:{username:username, password:password},
        success:function(result){
            if(result==false){
                $('#user-result').html("<h5>You've entered invalid data, please try again!</h5>");
            }else{
                window.location = base_url+"index.php/Library/index";
            }
        }
    });
}
$(document).ready(function(){
    $("#login-submit").click(function(){  
        check_availability();
    });
//////////////////////////////Buttons functionallity////////////////////////////
    $("#btn1").click(function(){
       window.location.href = base_url+"index.php/Add/index";
    });
    $("#btn2").click(function(){
       window.location.href = base_url+"index.php/See/index";
    });
    $("#btn3").click(function(){
       window.location.href = base_url+"index.php/Delete/index";
    });
    $("#back").click(function(){
       window.location.href = base_url+"index.php/Library/index";
    });
    $("#backToSee").click(function(){
       window.location.href = base_url+"index.php/See/index";
    });

///////////////////////////////Date Picker//////////////////////////////////////
    $(".date-input").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        weekStart: 1        
    });
    
//////////////////////////////Form Validations//////////////////////////////////
$.validator.setDefaults({
        errorClass:'help-block',
        highlight:function(element){
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight:function(element){
            $(element).closest('.form-group').removeClass('has-error');
        }
    });
    $.validator.addMethod("pagesVal", function( value, element ) {
	return this.optional( element ) || /^[0-9]*$/.test( value );
    });
    $.validator.addMethod("isbnVal", function( value, element ) {
	return this.optional( element ) || /^(?=[0-9]{13}$|(?=(?:[0-9]+[-\ ]){4})[-\ 0-9]{17}$)97[89][-\ ]?[0-9]{1,5}[-\ ]?[0-9]+[-\ ]?[0-9]+[-\ ]?[0-9]$/.test( value );
    },"Numbers only, example: 978-92-95055-02-5");
    $('#add-form').validate({
        rules:{
            title:{
                required:true,
                lettersonly:true
            },
            author:{
                required:true,
                lettersonly:true
            },
            pages:{
                required:true,
                nowhitespace:true,
                pagesVal:true
            },
            isbn:{
                required:true,
                isbnVal:true
            },
            publish_date:{
                required:true
            },
            format:{
                required:true
            },
            messages:{
                pages:{
                    required:"Numbers only!"
                }
            }
        }
    });
    $("#add-form").validate({
        invalidHandler: function() {
            console.dir(arguments);
            window.setTimeout(function() { 
                $("#add-form")[0].submit();
            }, 5000);
        }
    });
    
    $('#login-form-link').click(function(){
       $('#login-form').find("input[type=text], input[type=password]").val("");
       $('#login-form-link').addClass('active');
       $('#register-form-link').removeClass('active');
       $('#login-form').show();
       $('#reg-form').hide();
       $('#message').hide();
    });
    $('#register-form-link').click(function(){
       $('#reg-form').find("input[type=text], input[type=password]").val("");
       $('#register-form-link').addClass('active');
       $('#login-form-link').removeClass('active');
       $('#login-form').hide();
       $('#reg-form').show();
       $('#message').hide();
       
    });
}); 
//Validation registration
$(document).ready(function (){
    $.validator.setDefaults({
        errorClass:'help-block',
        highlight:function(element){
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight:function(element){
            $(element).closest('.form-group').removeClass('has-error');
        }
    });
        $.validator.addMethod('strongPassword', function(value, element){
            return this.optional(element)
                    || value.length>=6
                    &&/\d/.test(value)
                    &&/[a-z]/i.test(value);
        },'Your password must be at least 6 characters long and contain at least one number and one character\'.');
    $('#reg-form').validate({
        rules:{
            name:{
                required:true,
                nowhitespace:true,
                lettersonly:true
            },
            surname:{
                required:true,
                nowhitespace:true,
                lettersonly:true
            },
            family:{
                required:true,
                nowhitespace:true,
                lettersonly:true
            },
            email:{
                required:true,
                email:true
            },
            usern:{
                required:true,
                nowhitespace:true
            },
            password:{
                required:true,
                strongPassword:true
            },
            password2:{
                required:true,
                equalTo:"#pass"
            },
            messages:{
                email:{
                    required:"Please enter an email address.",
                    email:"Please enter a <em>valid</em> email address."
                }
            }
        }
    });
    $('#register-submit').attr('disabled','disabled');
    $('#reg-form > div > input').keyup(function() {
        var empty = false;
        $('#reg-form > div > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
        if (empty) {
            $('#register-submit').attr('disabled', 'disabled'); 
        } else {
            $('#register-submit').removeAttr('disabled');
        }
    });
    $('#register-submit').click(function(e){
        e.preventDefault();
        var name=$("input[name='name']").val();
        var surname=$("input[name='surname']").val();
        var family=$("input[name='family']").val();
        var email=$("input[name='email']").val();
        var username=$("input[name='usern']").val();
        var password=$("input[name='password']").val();
        $.ajax({
            method:"POST",
            url: base_url+"index.php/registration/Register/user/",
            data:{name: name, surname:surname, family:family, email:email, username: username, password:password},
            success:function(data){
                $('#reg-form').hide();
                alert('Created succsessfully!');
                location.reload();
            }
        });      
    });
$('.id').on("click",function(){
var id=$(this).attr('id');
$.ajax({
            method:"POST",
            url: base_url+"index.php/Delete/deleteFromLibrary",
            data:{id:id},
            success:function(data){
location.reload();
}
});
});
});
