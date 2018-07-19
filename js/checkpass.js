$(document).ready(function() {

    $('#submit').on('mouseover', function() {
        var user_name = document.getElementById('username').value;
        var pass = document.getElementById('password').value;
        // AJAX Request
        $.ajax({
            url: '../php/checkpass.php',
            type: 'post',
            data: {username:user_name, password:pass},
            dataType: 'json',
            success: function(data){
                var msg = data['error_msg']; //error_msg is from php returned array
                if(msg==" ")
                {
                    document.getElementById('error').style.display="none";
                    $("#error").text(msg);  //set error message
                }
                else
                {
                    document.getElementById('error').style.display="block";
                    $("#error").text(msg);  //set error message
                    document.getElementById('username').value = "";   
                    document.getElementById('password').value = "";   
                    document.getElementById('username').focus();         
                }
            },
            error: function(data){
                alert("error : " + JSON.stringify(data));
            }
        });
    });
});