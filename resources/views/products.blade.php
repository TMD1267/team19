<html>
    <head>
        <title>
            這是我的標題
        </title>
    </head>
    
    <body>
        <h1>標題1</h1>
        這是我的網頁內容:<br/>
        <a href="http://localhost:8000/about">關於(about) - 使用HTML A 標籤</a></br/>
        <a href="<?php echo route('demo.about'); ?>">關於(about) - 使用Larave1的路由器名稱</a></br/>
        <a href="<?php echo route('demo.products', ['count'=>10]); ?>">關於(about) - 使用Larave1的路由器名稱</a></br/>
    </body>
</html>        