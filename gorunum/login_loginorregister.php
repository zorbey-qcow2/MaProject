<!--<div class="container">
  <h1 class="title">
    Hello World
  </h1>
</div>

<h2>Login</h2>
<form action='login.php' method='post'>
<input type='text' name='kadi' /><br /><br />
<input type='password' name='sifre' /><br /><br />
<button type='submit' name='girisyap' class='button is-dark'>Login</button>
</form>
<br/>
<form action='' method='post'>
<button type='submit' name='kayitol' class='button is-info'>Register</button>
</form>
<br/>
-->
<style>
    html,body {
        font-family: 'Questrial', sans-serif;
        font-size: 14px;
        font-weight: 300;
    }
    .hero.is-success {
        background: #F2F6FA;
    }
    .hero .nav, .hero.is-success .nav {
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .box {
        margin-top: 5rem;
    }
    .avatar {
        margin-top: -70px;
        padding-bottom: 20px;
    }
    .avatar img {
        padding: 5px;
        background: #fff;
        border-radius: 50%;
        -webkit-box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
        box-shadow: 0 2px 3px rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.1);
    }
    input {
        font-weight: 300;
    }
    p {
        font-weight: 700;
    }
    p.subtitle {
        padding-top: 1rem;
    }

    .login-hr{
        border-bottom: 1px solid black;
    }

    .has-text-black{
        color: black;
    }

    .field{
        padding-bottom: 10px;
    }

    .fa{
        margin-left: 5px;
    }
</style>
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-black">Login</h3>
                <hr class="login-hr">
                <p class="subtitle has-text-black">Please login to proceed.</p>
                <div class="box">
                    <figure class="avatar">
                        <img src="https://placehold.it/128x128">
                    </figure>
                    <form action='login.php' method='post'>
                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="text" name="kadi" placeholder="username" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="password" name="sifre" placeholder="password">
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox">
                                Remember me
                            </label>
                        </div>
                        <button class="button is-block is-info is-large is-fullwidth" type='submit' name='girisyap'>Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                    </form>
                </div>
                <p class="has-text-grey">
                    <a href="../">Sign Up</a> &nbsp;·&nbsp;
                    <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                    <a href="../">Need Help?</a>
                </p>
            </div>
        </div>
    </div>
</section>
<script async type="text/javascript" src="gorunum/js/bulma.js"></script>