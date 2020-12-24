/**
 * Name: Armaan Singh
 * ID: 000794766
 * Statement Of Authorship: I  ensure that all the work done is mine. I haven't Copied from someone else and didn't allow someone else to submit
 * 
 * This is a insert.js file.
 * Here, admin 10 random  stocks.
 * All the code is in document.ready function.
 * Ajax function is used to retrieve the stocks table which is json encoded.
 * 
 *
*/
$(document).ready(function(){

    ///Using jquery for the CSS
    $("h1").css({"color":"black", });
    $("#h11").css("background-color","cornflowerblue");
    $("#h11").fadeOut("2000").fadeIn();

    $("#subb").fadeOut("5000").fadeIn();

    $("#subb").css({"position":"absolute", "margin-left":"40%", "margin-top":"5%"});

    $("th").css("background-color","whitesmoke").css("padding","10px");

    $("td").css("background-color", "whitesmoke" ).css("padding","10px");


    function success(stocks) {
        let insert = document.getElementById("insert");
        $("#insert").html(null);
        for (let i = 0; i < stocks.length; i++) {
            insert.innerHTML += "<br>" + "  ("  + stocks[i].StockName + " " + stocks[i].CurrentPrice + " "+ stocks[i].UpdateDateTime + ")  ";
            }        
    }


    $("subb").click(function(){
        fetch("ins.php", {
            method: 'POST',
            credentials: 'include',
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body:""
        })
        // Gets the response back in json
        .then(response => response.json())
        .then(success)
    });

});