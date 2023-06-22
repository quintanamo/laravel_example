@vite(['resources/scss/main.scss'])

<nav class="nav">
    <a class="nav__link" href="<?php echo URL::to('/') ?>">Home</a>
    <a class="nav__link" href="<?php echo URL::to('articles') ?>">Articles</a>
    <a class="nav__link" href="<?php echo URL::to('gallery') ?>">Gallery</a>
    <a class="nav__link" href="#">About</a>
</nav>