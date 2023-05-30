<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('/css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    @extends('index.Component')
    @extends('index.template')
    <main>

        @section('content')
        @section('navbar')

        <!-- page web header -->
        <header>
            @parent
        </header>

        <div id="contact" class="contact-us section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-heading">
                            <h2>ALF SAHEL Client Login Form</h2>
                            <div id="pic">
                                <img src="{{ url('/img/28.jpg') }}" />
                            </div>
                            <div class="info">
                                <span><i class="fa fa-phone"></i> <a href="#">(+212)<br> 522 964 705 </a></span>
                                <span><i class="fa fa-envelope"></i> <a href="#">alfsahel@gmail.com<br>contact@alfsahel.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center">
                        <form id="contact" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="email" name="Email_Admin" id="Email_Admin" placeholder="Email" autocomplete="on" required>
                                </fieldset>
                            </div>
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="password" name="Password_Admin" id="Password_Admin" placeholder="Mot de passe" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button" href="{{ route('DashbordClient')}}">login</button>
                                </fieldset>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <fieldset>
                                    <span> <small><center> Veuillez contactez l'adminidtration pour récupérer votre mot de passe</center></small></span>
                                </fieldset>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        <!-- Footer -->
        <footer>
            @section('Footer')
                @parent
            @endsection
        </footer>
    </main>
    @endsection

</body>
</html>