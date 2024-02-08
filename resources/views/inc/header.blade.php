<header class="container header">
    <div>
        <img src="{{asset('images/siteImages/logo.svg')}}" alt="Логотип" class="logo">
    </div>
    <div class="header-info">
        <nav>
            <div><a href="">Наші роботи</a></div>
            <div><a href="">Каталог</a></div>
        </nav>
        <div class="contacts">
            <div><a href="tel:+380669178126">+380669178126</a></div>
            <div><a href="tel:+380966293442">+380966293442</a></div>
        </div>
    </div>
</header>

<style>
    header {
        height: 63px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 50px;
    }

    .logo {
        width: 70px;
        height: 54px;
    }

    nav {
        display: flex;
    }

    nav div {
        margin-left: 70px;
    }

    .contacts {
        display: flex;
    }

    .contacts div a {
        margin-left: 70px;
        color: #F18119;
    }

    .header-info {
        display: flex;
        font-size: 20px;
        font-family: 'Neue Machina Regular';
    }
</style>
