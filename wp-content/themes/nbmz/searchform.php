<form
    class="search-form"
    role="search"
    method="get"
    id="searchform"
    action="<?php echo home_url('/') ?>"
>
    <input
        class="search-form__input"
        type="text"
        value="<?php echo get_search_query() ?>"
        name="s" id="s"
        placeholder="Поиск"
        autocomplete="off"
    />
    <button type="submit" id="searchsubmit" class="btn-search">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="8" cy="8" r="7.5" stroke="#029678"/>
            <path d="M13 14L19 20" stroke="#029678"/>
        </svg>
    </button>
</form>
