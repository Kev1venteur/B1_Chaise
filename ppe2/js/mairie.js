$( document ).ready(function() {
	$("#imgLogin").click(function(){
		$("#myModal").modal();
		});
	$("#imgLogout").click(function(){
		alert ("Demande déconnexion");
		});
	$("#login").submit(function( e ){
		e.preventDefault();
		
		hd();
		var $url="ajax/valide_connect.php";
		$categ="2";
		if($("input[type=radio][name=rblogin]:checked").attr("value")=="rbs"){$categ="1";}
		var formData = {
			"id" 					: $("#id").val().toUpperCase(),
			"mp"					: $("#mp").val(),
			"categ"					: $categ
		};
		var filterDataRequest = $.ajax(
		{
			type: "POST",
			url: $url,
			dataType: "json",
			encode          : true,
			data: formData,
		});
		filterDataRequest.done(function(data)
		{
			if ( ! data.success)
			{
				var $msg="erreur-></br><ul style=\"list-style-type :decimal;padding:0 5%;\">";
				if (data.errors.message) {
					$x=data.errors.message;
					$msg+="<li>";
					$msg+=$x;
					$msg+="</li>";
				}
				if (data.errors.requete) {
					$x=data.errors.requete;
					$msg+="<li>";
					$msg+=$x;
					$msg+="</li>";
				}
				$msg+="</ul>";
			}
			else
			{
				$msg="";
				if(data.message){$msg+="</br>";$x=data.message;$msg+=$x;}
				hd();
			}
			$("#ModalRetour").find("p").html($msg); 
			$("#ModalRetour").modal();
		});
		filterDataRequest.fail(function(jqXHR, textStatus)
		{
			if (jqXHR.status === 0){alert("Not connect.n Verify Network.");}
			else if (jqXHR.status == 404){alert("Requested page not found. [404]");}
			else if (jqXHR.status == 500){alert("Internal Server Error [500].");}
			else if (textStatus === "parsererror"){alert("Requested JSON parse failed.");}
			else if (textStatus === "timeout"){alert("Time out error.");}
			else if (textStatus === "abort"){alert("Ajax request aborted.");}
			else{alert("Uncaught Error.n" + jqXHR.responseText);}
		});
	});

});

function hd(){
	$("#myModal").modal("hide");
}
function hdModalRetour(){
	$("#ModalRetour").modal("hide") ;
	document.location.href="index.php";
	}


