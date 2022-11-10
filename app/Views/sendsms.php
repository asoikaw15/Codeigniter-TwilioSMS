<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://assets.flex.twilio.com/releases/flex-webchat-ui/2.9.1/twilio-flex-webchat.min.js" integrity="sha512-yBmOHVWuWT6HOjfgPYkFe70bboby/BTj9TGHXTlEatWnYkW5fFezXqW9ZgNtuRUqHWrzNXVsqu6cKm3Y04kHMA==" crossorigin></script>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    

    $(document).ready(function(){
    const logs = document.getElementById('logs')
    const form = document.getElementById('form')
    const message = document.getElementById('message')
        $('#form').on('submit',function(e) {
            e.preventDefault();
    $.ajax({
        url: 'message_sent',
        headers: {'X-Requested-With': 'XMLHttpRequest',"Access-Control-Allow-Origin":"http://localhost:8080"},
        type: 'POST',
        // dataType: 'html',
        data: {
            number: $('#number').val(),
            message: $('#message').val()
        },
        
        success: 
        function(data){
               $('#logs').append(`<h3>${$('#message').val()}</h3>`)
              },
    
                   
    });
    return false;
});
    })
   
</script>
<h1>Customer Center</h1>
<div>
    <form id="form" method="POST" action="">
        <label for="sms_message">Message</label>
        <input type="text" name="message" id="message"/>
        <input type="text" name="number" id="number"/>
        <button type="submit" id="#submit">Submit</button>
    </form>
    <div id="logs">

    </div>
</div>


</body>
</html>
