<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--icon/logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <style>
        .card
        {
            margin-top : 90px;
            margin-bottom : 90px;
        }
    </style>

    <script type="text/javascript">
        function hide()
        {
            document.getElementById('info').style.display = 'none';
        }
    </script>

    <title>Clients</title>
</head>
<body>

    @extends('Admin.AdminComponent')
    <main>
        @section('Nav')
        <header>
            @parent
        </header>

        @if( session()->has('info') ) 
            <div id="info" class="notification is-success"> 
                <button class="delete" onclick="hide()"></button>
                {{ session('info') }} 
            </div> 
        @endif 

        <div class="card"> 

            <header class="card-header"> 
                <p class="card-header-title">Admins</p>
                <a class="button is-success" href="{{ route('admins.create') }}">Ajouter un Nouveau Admin</a>
            </header> 

            <div class="card-content"> 

                <div class="content"> 

                    <table class="table is-hoverable"> 

                        <thead> 
                            <tr>
                                <th>#</th> 
                                <th>Nom</th> 
                                <th>Prenom</th> 
                                <th>Email</th> 
                                <th>Password</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr> 
                        </thead> 

                        <tbody> 
                            @foreach($admins as $admin) 
                            <tr>
                                <td>
                                    {{ $admin->id }}
                                </td>
                                <td>
                                    {{ $admin->name }}
                                </td>
                                <td>
                                    {{ $admin->prenom }}
                                </td> 
                                <td>
                                    {{ $admin->email }}
                                </td> 
                                <td>
                                    {{ $admin->password }}
                                </td>
                                <td>
                                    <a class="button is-warning" href="{{ route('admins.edit', $admin->id) }}" >Modifier</a>
                                </td> 
                                <td>
                                    <form action="{{ route('admins.destroy', $admin->id) }}" method="post"> 
                                        @csrf 
                                        @METHOD('DELETE') 
                                        <button class="button is-danger" type="submit">Supprimer</button> 
                                    </form>
                                </td> 
                            </tr>
                            @endforeach 
                        </tbody> 
                    </table> 
                </div> 
            </div> 
        </div> 
        @endsection

        <footer>
            @section('footer')
                @parent
            @endsection
        </footer>

    </main>

    
</body>
</html>