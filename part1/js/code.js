$(document).ready(function(){
// alert("yuhu");
});
function checkValue(id)
{
	// alert(id);return false;
	getvalue = $("#search_box").val();
	// alert(getvalue);return false;
	if(getvalue==0)
	{
		$("#me").css("display","none");
	}else{
		// alert(getvalue);return false;
		$.post('ajaxFiles/find.php',{getvalue:getvalue},function(data){
			// alert(data);return false;
			// $("#hehe").html(data);return false;
			$("#me").html(data);
			$("#me").css("display","block");
		});
	}
}
function search()
{
	$.post("ajaxFiles/find1.php",{},function(data){
		if(data!=0)
		{
			$("#show").html(data);
		}else{
			alert("There are no users with the name john");
		}
	});
}