<??>
<!Doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" charset="UTF-8">
        <title><?echo $pageData['title']?></title>
        <link rel="stylesheet" href="/css/osnov.css">
    </head>
    <body>
        <div class = "main contact">
            <form action="" method="POST" class = "form-holder" id = "form">
                <div class = "form-field form-field-name">ФИО</div>
                <input type = "text" name = "user_fio" class = "form-field form-field-input">
                <div class = "hint-invisible" id = "hint-name">Поле не должно быть пустым</div>
                <div class = "form-field form-field-name">Адрес</div>
                <input type = "text" name = "user_address" class = "form-field form-field-input">
                <div class = "hint-invisible" id = "hint-address">Поле не должно быть пустым</div>
                <div class = "form-field form-field-name">Номер телефона</div>
                <input type = "text" name = "user_phone" class = "form-field form-field-input">
                <div class = "hint-invisible" id = "hint-phone">Поле не должно быть пустым</div>
                <div class = "form-field form-field-name">E-mail</div>
                <input type = "text" name = "user_email" class = "form-field form-field-input">
                <div class = "hint-invisible" id = "hint-email">Поле не должно быть пустым</div> <div class = "hint-invisible" id = "hint-email-invalid">Неверный формат почты</div>
                <input type = "submit" value = "ОТПРАВИТЬ" class = "form-field" id = "submit-button">
            </form>
            <div class = "form-contact-info">
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="js/form.js"></script>
    </body>
</html>
