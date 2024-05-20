function load_film(){
       $.ajax({
        url: 'http://217.71.129.139:4747/api_osamu/get_films.php?count=11&offset=0',
        method: 'get',
        dataType: 'json',
        success: function(data){
        $('#film').html('')
            data['film'].forEach(function(film){
                let div = $('<div class="films">')
				div.append('<div class="foto"><img src="'+film['Poster']+'"></div>')
                div.append('<h4 class="ustal">'+film['Title']+', '+film['Year']+' год, '+film['Rezishor']+' </h4>')
                div.append('<p class="ustal">'+film['Opisanie']+' </p>')
                $('#film').append(div)	
            })
        }
    });
}