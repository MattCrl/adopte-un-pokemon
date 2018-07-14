import $ from 'jquery'

// fetch
$(document).ready(function() {
    $("#ad_pokemon").keyup(function(){
        let pokemon = $(this).val();
        if ( pokemon.length >= 2 ) {
            fetch(`/pokemon/list/${pokemon}`)
                .then(function(response) {
                    return response.json();
                })
                .then(function(pokemons) {
                    console.log(pokemons);
                    let html = "";
                    pokemons.forEach(pokemon => html += `<li class="list-group-item">${pokemon.name}</li>`);
                    const myList = document.getElementById('autocomplete');
                    myList.innerHTML = html;
                    $('#autocomplete li').on('click', function() {
                        $('#ad_pokemon').val($(this).text());
                        $('#autocomplete').html('');
                    });
                })
        } else {
            $('#autocomplete').html('');
        }
    });
});

/*
// ajax
$(document).ready(function() {
    $("#ad_pokemon").keyup(function(){
        let pokemon = $(this).val();
        if ( pokemon.length >= 3 ) {
            $.ajax({
                type: "POST",
                url: "/pokemon/list" + pokemon,
                dataType: 'json',
                timeout: 3000,
                success: function(response) {
                    let pokemons = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < pokemons.length; i++) {
                        html += "<li>" + pokemons[i].pokemon + "</li>";
                    }
                    $('#autocomplete').html(html);
                    $('#autocomplete li').on('click', function() {
                        $('#ad_pokemon').val($(this).text());
                        $('#autocomplete').html('');
                    })
                }
            })
        } else {
            $('#autocomplete').html('');
        }
    });
});*/
