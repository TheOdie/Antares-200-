<form role="search" method="get" id="searchform" class="search-form_form" action="<?php echo home_url( '/' ) ?>" >
    <input type="text" placeholder="Введіть для пошуку..." class="search-form" value="<?php echo get_search_query() ?>" name="s" id="s" />

    <li class="nav-item">
        <btn type="submit" id="search-form_btn" class="nav-link navbar-search__btn" href="#" tabindex="-1" aria-disabled="true"></btn>
    </li>
</form>