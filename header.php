<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>mother bread workshop</title>
    <meta name="Saki's illustrations" content="この記事では、私が描いたイラストについて紹介しています。
    １つ１つ思いを込めて制作したイラストたちを、是非ご覧ください。">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>




<!-- header navgation  rapper -->

<header>
    <div class="logo">
        <h1>nekonote ko-bo-</h1>
    </div>

    <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる。
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定 //
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する。 //
                );
                wp_nav_menu($args);//メニューを表示
                ?>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</header>

<!-- header navgation  end -->