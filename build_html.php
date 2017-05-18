<?php
function html_article ($id, $title, $paragraphs) {
    echo <<<HTML
<article>
    <a class="anchor" id="{$id}"></a>
    <i class="anchoring fa fa-adjust"></i>
    <h1>{$title}</h1>
    <p>
HTML;

    foreach($paragraphs as $para) {
        echo "<{$para[0]}>{$para[1]}</{$para[0]}>";
    }

    echo <<<HTML
    </p>
    <div class="likebar">
        <button class="like"><i class="fa fa-thumbs-up"></i></button>
        <button class="dislike"><i class="fa fa-thumbs-down"></i></button>
    </div>
</article>
HTML;
}

function html_image ($src, $caption, $alt) {
    echo <<<HTML
<div class="img-container">
    <img src="{$src}" alt="{$alt}">
    <p>{$caption}</p>
</div>
HTML;

}

function html_full_page ($posts) {
    echo <<<HTML
<nav class="text-center">
    <ul class="nav nav-pills center-pills">
HTML;
    foreach($posts as $post) {
        echo "<li><a href='#{$post["anchor"]}'>{$post["short-title"]}</a></li>";
    }

    echo <<<HTML
    </ul>
</nav>
<section>
HTML;

    foreach($posts as $post) {
        html_article($post["anchor"],$post["title"],$post["paragraphs"]);
    }
}
    echo <<<HTML
</section>
HTML;
?>