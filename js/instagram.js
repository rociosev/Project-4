// JavaScript Document


//Use this url below to get your access token
//https://instagram.com/oauth/authorize/?display=touch&client_id=1305ecaf399a47aa9941e7cfb970e8ae&redirect_uri=http://steventking.com/apps/instagram&response_type=token 

//if you need a user id for yourself or someone else use:
//http://jelled.com/instagram/lookup-user-id
	
						
$(function() {
	
	var apiurl = "https://api.instagram.com/v1/tags/roadtrip/media/recent?access_token=258490999.1305eca.7d66517932854a368643fe37893b0ac5&callback=?"
	var access_token = location.hash.split('=')[1];
	var html = ""
	
		$.ajax({
			type: "GET",
			dataType: "json",
			cache: false,
			url: apiurl,
			success: parseData
		});
				
		
		function parseData(json){
			console.log(json);
			
			$.each(json.data,function(i,data){
				<!--html += '<p>Filter:"'+ data.filter+'"</p>';-->
				html += '<img src ="' + data.images.low_resolution.url + '">'
				if (data.caption !== null) {
				html += '<p class="insta-caption">'+ data.caption.text+'"</p>';
				};
			});
			
			console.log(html);
			$("#results").append(html);
			
		}
		
		
                
               
 });