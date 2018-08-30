$( "#country_select" ).change(function() {
	var country_id = $("#country_select").val();
	var get_city_url = base_url+"get_city_data";
	
	$.ajax({
		type: "POST",
		url: get_city_url,
		data: {country_id:country_id},
		success: function (res){
			if (res) {
				var html_str = '';
				for(var i = 0 ; i < res.data.length ; i++)
				{
					html_str += '<option value"'+res.data[i].id+'"=>'+res.data[i].name+'</option>';
				}
				
				$("#city_select").show();
				$("#city_select").html(html_str);
			} else {
				alert("city Is Not Present");
			}
		},
		error : function (res) {

		}
	});
});
