$(document).ready(function () {
    $('input[name=user_phone]').mask("+7(999)999-9999");
    var valid = false;
    $(".form-holder").on("submit", function(e) {
        e.preventDefault();
        var name = $('input[name="user_fio"]').val();
        var address = $('input[name=user_address]').val();
        var phone = $('input[name=user_phone]').val();
        var email = $('input[name=user_email]').val();

        if(name == "") {
            $('input[name="user_fio"]').addClass("invalid-input");
            valid = false;
        } else {
            $('input[name="user_fio"]').removeClass("invalid-input");
            valid = true;
        }
        if(address == "") {
            $('input[name="user_address"]').addClass("invalid-input");
            valid = false;
        } else {
            $('input[name="user_address"]').removeClass("invalid-input");
            valid = true
        }
        if(phone == "") {
            $('input[name="user_phone"]').addClass("invalid-input");
            valid = false;
        } else {
            $('input[name="user_phone"]').removeClass("invalid-input");
            valid = true
        }
        if(email == "") {
            $('input[name="user_email"]').addClass("invalid-input");
            valid = false;
        } else {
            $('input[name="user_email"]').removeClass("invalid-input");
            valid = true
        }
        if (valid == true) {
            $.ajax({
                type: "POST",
                url:  "form.php",
                data: $(this).serialize()
            }).done(function() {
                $("#name").html(name);
                $("#address").html(address);
                $("#phone").html(phone);
                $("#email").html(email);
                $(".form-contact-info").css("display", "grid");
                $(".form-holder").trigger("reset");
            });
        }        
    });
});