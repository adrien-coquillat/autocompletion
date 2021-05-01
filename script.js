console.log("jsaijsia");

$("#test").html('Hello world');


$("#search").on("input", function (event) {
    var recherche = $('#search').val();
    console.log(recherche);
    $.ajax({
        url: "recherche.php?search=" + recherche,
        success: function (result) {
            console.log(result);
        }
    });

});