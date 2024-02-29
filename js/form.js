$(document).ready(function () {
    $('input[name=user_phone]').mask("+7(999)999-9999");
    var valid = false;
    $(".form-holder").on("submit", function(e) {
        e.preventDefault();
        var name = $('input[name="user_fio"]').val();
        var address = $('input[name=user_address]').val();
        var phone = $('input[name=user_phone]').val();
        var email = $('input[name=user_email]').val();
        var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
        validCount = 0;

        if(name == "") {
            $('input[name="user_fio"]').addClass("invalid-input");
            validName = false;
        } else {
            $('input[name="user_fio"]').removeClass("invalid-input");
            validName = true;
        }
        if(address == "") {
            $('input[name="user_address"]').addClass("invalid-input");
            validAddress = false;
        } else {
            $('input[name="user_address"]').removeClass("invalid-input");
            validAddress = true;
        }
        if(phone == "" || phone.length != 15) {
            $('input[name="user_phone"]').addClass("invalid-input");
            validPhone = false
        } else {
            $('input[name="user_phone"]').removeClass("invalid-input");
            validPhone = true;
        }
        if((email == "") || (email.search(pattern) != 0)) {
            $('input[name="user_email"]').addClass("invalid-input");
            validEmail = false;
        } else {
            $('input[name="user_email"]').removeClass("invalid-input");
            validEmail = true;
        }
        if (validName && validPhone && validAddress && validEmail) {
            $.ajax({
                type: "POST",
                url:  "form.php",
                data: $(this).serialize(),
                success: function(data){
                    let z = JSON.parse(data);
                    z.forEach(el => {
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name odd',
                            'text': 'ФИО'
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name even',
                            'text': el.name
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name odd',
                            'text': 'Адрес'
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name even',
                            'text': el.address
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name odd',
                            'text': 'Телефон'
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name even',
                            'text': el.phone
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name odd',
                            'text': 'E-mail'
                        }))
                        $('.form-contact-info').append($('<div>', {
                            'class': 'form-field form-field-name even',
                            'text': el.email
                        }))
                        $(".form-contact-info").css("display", "grid");
                    })
                }
            });
        }        
    });
});