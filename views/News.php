<??>
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?echo $pageData['title']?></title>
        <link rel="stylesheet" href="/css/osnov.css">
    </head>
    <body>
        <div class = "main">
            <div class = "news-holder">
                <?foreach ($pageData["news"] as $news) :?>
                <div class = "news-block">
                    <div class = "data"><?=$news["date"]?></div>
                    <h1><?=$news["title"]?></h1>
                    <p><?=$news["text"]?></p>
                </div>
                <?endforeach?>
            </div>
        </div>
    </body>
</html>
