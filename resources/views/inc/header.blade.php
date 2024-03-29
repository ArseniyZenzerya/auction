<header class="header">

    <div class="header-wrap">
        <a href="{{route('index')}}">
            <img src="{{asset('images/icons/logo.svg')}}" alt="" class="logo">
        </a>

        <div class="right-menu">
            @auth('web')
                <a href="{{route('viewCreateFirstStep')}}">
                    <div class="button">Create auction</div>
                </a>
                <div class="dropdown">
                    <div class="profile-button"><img src="{{asset('/images/icons/IconCabinet.svg')}}" alt=""></div>
                    <div class="dropdown-content">
                        <a href="{{route('api.logout')}}">
                            <div>Logout</div>
                        </a>
                    </div>
                </div>
            @endauth
            @guest('web')
                <a href="{{route('login')}}">
                    <div class="button">Log In</div>
                </a>
            @endguest
        </div>
    </div>


</header>

<style>
    .input-search {
        width: 439px;
        height: 40px;
    }

    .profile-button{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button {
        background: #2196F3;
        padding: 12px 16px;
        border-radius: 100px;
        color: #fff;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--main-color);
        height: 72px;
        width: 100%;
        padding: 12px 36px;
    }

    .logo {
        width: 75px
    }

    .profile-button {
        background: #fff;
        width: 48px;
        height: 48px;
        margin-left: 32px;
        border-radius: 100%;
        border: 1px solid #D9D9D9;

    }

    .right-menu {
        display: flex;
        align-items: center;
    }

    .header-wrap {
        display: flex;
        align-items: center;
        width: 100%;
        padding-left: var(--offset);
        padding-right: var(--offset);
        justify-content: space-between;
    }

    .profile-button {
        padding: 30px;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        left: 30px;
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>
