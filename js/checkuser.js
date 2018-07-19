$(document).ready(function(){
    $("#password,#cPassword").focus(function(){
        var user_name = document.getElementById('username').value;
        // AJAX Request
        $.ajax({
            url: '../php/checkusername.php',
            type: 'post',
            data: {username:user_name},
            dataType: 'json',
            success: function(data){
                var msg = data['error_msg']; //error_msg is from php returned array
                if(msg=="")
                {
                    document.getElementById('error').style.display="none";
                    $("#error").text(msg);  //set error message
                }
                else
                {
                    document.getElementById('error').style.display="block";
                    $("#error").text(msg);  //set error message
                    document.getElementById('username').value = "";    
                    document.getElementById('username').focus();             
                }
            },
            error: function(data){
                alert("error : " + JSON.stringify(data));
            }
        });
    });
})