<header class="header">
    <div class="container">
        <div class="header__content">
            <a href="/" class="logo header__logo">
                <img src="{{ asset('images/logo_1.svg') }}" alt="logo">
            </a>
            <div class="header__nav">
                <div class="menu">
                    <button type="button" class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="#000000"/></svg>
                    </button>
                    <div class="menu__wrapper">
                        <ul class="menu__list">
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">KASZINÓK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">BÓNUSZOK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">NYERŐGÉPEK</a>
                            </li>
                            <li class="menu__item alt-small active">
                                <a href="#" class="menu__link">VALÓDI PÉNZES KASZINÓK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">JÁTÉKOK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">FIZETÉSI MÓDOK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">ÚJ KASZINÓK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">RÓLUNK</a>
                            </li>
                            <li class="menu__item alt-small">
                                <a href="#" class="menu__link">KAPCSOLAT</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button"><img src="{{ asset('images/search.svg') }}" alt="search"></button>
                <button type="button"><img src="{{ asset('images/lang.svg') }}" alt="language"></button>
                <button type="button" class="burger"><img src="{{ asset('images/burger.svg') }}" alt="menu"></button>
            </div>
        </div>
    </div>
</header>