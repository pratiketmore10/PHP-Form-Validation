$(function(){
$("#register_form").validate({
    rules:{
        f_name:{
            required:true
        },
        l_name:{
            required:true
        },
        email:{
            required:true
        },
        password:{
            required:true,
            minlength:3,
            maxlength:30
        },
        retype_password:{
            required:true,
            minlength:3,
            maxlength:30,
            equalTo:'#new_password'
        }
    },
    messages:{
        f_name:{
            required:'First name required'
        },
        l_name:{
            required:'Last name required'
        },
        Email:{
            required:'Enter Email address'
            
        },
        password:{
            required:'Enter new password'
        },
        retype_password:{
            required:"Enter Retype password"
        }
    },
    submitHandler:function(frm){
        alert('Form has been successfully validated')
        return false;
    }
});
});