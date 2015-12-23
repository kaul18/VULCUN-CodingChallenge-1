$(document).ready(function(){
	timeOut();
});
function sendDetails()
{
	// alert("yeah");return false;
	name = $("#name").val();
	message = $("#message").val();
	elem = "";
	elem1 = "";
	if(name == 0 || message == 0)
	{
		alert("Name and message fields cannot be empty");
		return false;
	}else{
		$.post("ajaxFiles/chat.php",{name:name,message:message},function(data){
			if(data!=0)
			{
				// alert(data);return false;
					$("#inner").html(data);
					$("input[type=text],textarea").val("");	
					$("#name").focus();
					// timeOut();
			}else{
				return false;
			}
		});
	}
	// alert(name+message);
}
function chatSel()
{
	
	// alert("heyy");
	$.post("ajaxFiles/chatSel.php",{},function(data){
			if(data!=0)
			{
				// alert(data);return false;
					$("#inner").html(data);
			}else{
				return false;
			}
		});
	timeOut();
}
function timeOut()
{
	setTimeout(function()
	{ 
    	chatSel();
	},2000 );
}