<nav class="navbar navbar-expand-lg navbar-dark nav-style">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <?php
            wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
