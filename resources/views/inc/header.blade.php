<header class="container header">

<img src="" alt="" class="logo">

 <input class='input-search' name="input" type="text" placeholder="Search an item?" />

<div class="right-menu">
  <div class="button">Create auction</div>
  <div class="profile-button"><img src="{{asset('/images/logo.svg')}}" alt=""></div>
</div>

</header>

<style>
  .input-search {
    width: 439px;
    height: 40px;
    padding: auto;
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

  header{
    display: flex;
    justify-content: space-between;
    align-items: center;

    background: #E6F7FF;
    height: 72px
    width 100%;
    padding: 12px 36px;
  }

  .logo{
    width: 150px
  }

  .profile-button{
    background: #fff;
    width: 48px;
    height: 48px;
    margin-left: 32px;
    border-radius: 100%;
    border: 1px solid #D9D9D9;
  
  }
  
  .right-menu{
    display: flex;
  }
</style>
