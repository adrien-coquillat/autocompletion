
$("#search").on("input", function (event) {
    var recherche = $('#search').val();
    console.log(recherche);
    $.ajax({
        url: "recherche.php?search=" + recherche,
        success: function (results) {
            console.log(results);

            $("#suggestList").empty();
            for (const res of JSON.parse(results)) {
                const content = '<option>' + res.nom + '</option>';
                $("#suggestList").append(content);
            }
        }
    });

});