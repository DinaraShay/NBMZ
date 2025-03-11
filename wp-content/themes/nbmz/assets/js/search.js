document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', function (e) {
        const allSearchForms = document.querySelectorAll('.search-form'); // Находим все формы

        allSearchForms.forEach(searchForm => {
            const input = searchForm.querySelector('.search-form__input');
            const button = searchForm.querySelector('#searchsubmit');

            if (button && button.contains(e.target)) {
                // Если кликнули по кнопке внутри формы
                if (!searchForm.classList.contains('active')) {
                    e.preventDefault();
                    searchForm.classList.add('active');
                    if (input) input.focus();
                }
            } else if (!searchForm.contains(e.target)) {
                // Если клик произошел за пределами формы
                searchForm.classList.remove('active');
                if (input) input.value = '';
            }
        });
    });
});