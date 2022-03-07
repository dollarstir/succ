$(document).ready(function () {

    $("#regform").submit(function (event) {

        event.preventDefault();
        $.ajax ({

            url: 'add.php',
            type:'POST',
            data: {
                fname: $("#fn").val(),
                lname: $("#ln").val(),
                contact: $("#ct").val(),
                level: $("#lev").val(),
                gender: $("#gend").val(),
                type : $("#tp").val(),
                btnreg: $("#btnrg").val()
            },
            beforeSend: function () {


                
            },
            success: function (response) {

                $("#ttip").html(response);
                $(".mec").fadeOut(6000);


                
            },






        })


        
    });
    
});