<footer class="footer">
    <div class="footer-wrap">
        <img src="{{asset('images/icons/logo.svg')}}" alt="" class="logo">

        <div class="text">
            <h2>Created with love and lot of caffeine by SLAY!ers</h2>
        </div>
        <div class="data">
            <h3>2024</h3>
        </div>
    </div>
</footer>

<style>
    .footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--main-color);
        height: 72px;
        width: 100%;
        padding: 12px 36px;
        margin-top: 100px;
    }


    .footer-wrap{
        display: flex;
        width: 100%;
        padding-left: var(--offset);
        padding-right: var(--offset);
        justify-content: space-between;
    }

    .text{
        color: rgba(0,0,0,0.25);
    }
</style>
