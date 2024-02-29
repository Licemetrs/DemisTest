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
            <?foreach ($pageData["news_first"] as $news_f) :?>
                    <div class = "news-block f">
                        <div class = "data"><?=$news_f["date"]?></div>
                        <h1><?=$news_f["title"]?></h1>
                        <p><?=$news_f["text"]?></p>
                    </div>
                <?endforeach;?>
                <?foreach ($pageData["news_range"] as $news) :?>
                    <div class = "news-block">
                        <div class = "data"><?=$news["date"]?></div>
                        <h1><?=$news["title"]?></h1>
                        <p><?=$news["text"]?></p>
                    </div>
                <?endforeach;?>
            </div>
            <div class = button-menu-under>
                <a href = "/news" class = "menu-button">Все новости</a>
                <a href = "/contact" class = "menu-button">Обратная связь</a>
            </div>
        </div>
    </body>
</html>
