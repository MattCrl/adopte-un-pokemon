import $ from 'jquery'

// Fetch
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
                    pokemons.forEach(pokemon => html += `<li class="list-group-item one-item">${pokemon.name}</li>`);
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
