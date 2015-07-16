
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script src="https://cdn.socket.io/socket.io-1.0.0.js"></script>

<script type="text/javascript">

	//socket setup
	//type: ( 0:chat_request, 1:chat )
	if ( socket ){
		console.log('test socket true');
		//socket.emit("chat_request", "test" );
	}
	else {
		var socket = io.connect('http://10.0.0.228:3001');
		//var socket = io.connect('http://localhost:3001');
		console.log('test socket false');
		
	}	
		
	var userID = "<?php echo Yii::app()->session['uid'] ?>";  //is there any better way to pass php variable to javascirpt???
	var receID = "<?php echo $receiver['id'] ?>";             //hasn't used
    //send chat request to server 	
    socket.emit('chat_request', {type:0, sender: userID , receiver: receID, message:"", time: new Date($.now()) }  );

    //open its own socket for myself.
    socket.on(userID, function(data){
    	console.log('received incoming message');
    	//when received messages, check and display that message
    	if ( data['type'] != undefined && data['type'] == 1 ){
    		//display the received chat message
    		//$('#message-display').append( "<div class='message'>testing, this is received</div>" );
    		$( '.hidden-message .sender'  ).text( data['sender'] );
	    	$( '.hidden-message  .content'  ).text( data['message'] );
	    	$( '.hidden-message  .time'  ).text( data['time'] );
	    	var $div = $('.hidden-message');
	    	var $tmp = $div.clone().prop('class', 'message' );
	    	$('#message-display').append($tmp);

    	}
    	else if (  data['type'] != undefined && data['type'] == 2 ) {



    	}




    })


	//alert("hi");
	$(document).ready(function() {

		$('#chat-form').on('submit', function (e) {
			var formData = $(this).serializeArray();    	
    		sendMessage(formData);

    		
    		$('#msg').val("");
    		//e.stopPropagation();
    		return false;
		});


		$('input#msg').on('click', function (e) {
			var uid = "<?php echo Yii::app()->session['uid'] ?>";
    		// alert('uid: '+uid);	

		});

	});

	

    function sendMessage(formData){
    	console.log(' send message');
    	if ( formData[0]['name'] == 'type') {
    		//
    	}

    	var datetime = new Date($.now());
    	var dataToSend = { type: formData[0]['value'], sender: formData[1]['value'], receiver: formData[2]['value'], message: formData[3]['value'], time: datetime };
    	// console.log(dataToSend);

    	//clone hidden field
    	
    	$( '.hidden-message .sender'  ).text( formData[1]['value'] );
    	$( '.hidden-message  .content'  ).text( formData[3]['value'] );
    	$( '.hidden-message  .time'  ).text( datetime );
    	var $div = $('.hidden-message');
    	var $tmp = $div.clone().prop('class', 'message' );
    	$('#message-display').append($tmp);

    	//send via socket
    	//socket.emit('chat_message', dataToSend);
    	socket.emit(formData[1]['value'], dataToSend);
    }


</script>




<div class="container">
	<h1>Question Page #</h1>
	<div class="row-fluid">
		<div class=" col-md-8 col-xs-8" >

			<div id="message-display">

				<div class="message">
					<p class="question"> Question </P>
				</div>

			</div>

			
			<div class ="hidden-message">
					<p class="sender">   </p>
					<p class="time">  </p>
					<p class="content">  </p>

			</div>



			



		</div>
	</div>



	<form id="chat-form" action="POST">
		
		 <div class="form-group" >	    	
		    
		    <input type="hidden" class="reset" name="type" value="1">
		    <input type="hidden" class="reset" name="userID" value="<?= Yii::app()->session['uid'] ?>">
		    <input type="hidden" class="reset" name="receID" value="<?= $receiver['id'] ?>">
		    <input class="form-control" class="reset" id='msg' name="message" value="">
		    <button type="submit" id ="message-button" class="btn btn-default pull-right">Send</button>
		    
		 </div>
		 
		 

	</from>



</div>
 




