$(document).ready(function(){

    $("#products").on("click", ".add-to-cart", function(e){
        //console.log("Hello");
        e.preventDefault();
        $.ajax({
            "url": "config.php",
            "method":"post",
            "data": {
                "id": $(this).data("id"),
                "action": "add"
            },
           "dataType": "json"            
        }).done(function(data){
            console.log(data);
        });
    });

});