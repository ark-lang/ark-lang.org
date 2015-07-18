<?php

    require_once 'parsedown.php';
    $parsedown = new Parsedown();

?>

<nav class="nav-wrapper">
    <ul class="nav">
        <li class="nav-logo">
            <div class="col-hex">
                <object class="logo" data="res/ark-logo.svg" type="image/svg+xml">
                    <img src="res/logo-fb.png">
                </object>
            </div>
        </li>
        <li><a href="/">Home</a></li>
        <li class="nav-separator">//</li>
        <li><a href="reference">Reference</a></li>
        <li><a href="styleguide">Style Guide</a></li>
        <li><a href="contributing">Contributor Guide</a></li>
        <li class="nav-separator">//</li>
        <li><a href="//github.com/ark-lang/">GitHub</a></li>
        <li><a href="//webchat.freenode.net/?channels=%23ark-lang">IRC</a></li>
        <li><a href="//reddit.com/r/ark_lang">Reddit</a></li>
        <li><a href="//blog.ark-lang.org">Blog</a></li>
    </ul>
</nav>
