<?php
function html_article ($id, $title, $paragraph) {
    echo <<<HTML
<article>
    <a class="anchor" id="{$id}"></a>
    <i class="fa fa-adjust"></i>
    <h1>{$title}</h1>
    <p>{$paragraph}</p>
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
        html_article($post["anchor"],$post["title"],$post["paragraph"]);
    }
}
    echo <<<HTML
</section>
HTML;
?>