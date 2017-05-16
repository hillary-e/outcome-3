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
?>