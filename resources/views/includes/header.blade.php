<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="col-md-2 col-md-offset-2 logo">
            <img src="{{ URL::to('src/img/flyprint-logo.png')}}" width="150px" height="auto">
        </div>
        <div class="col-md-3 col-md-offset-1">
            <p class="our-phone"> Appelez-nous: <strong>+32 (0) 19 33 87 87</strong></p>
            <a href="{{ route('device') }}" class="btn btn-primary button_big"> <strong>Devis / Commander</strong></a>
        </div>


        @if(Auth::check())
            <div class="col-md-3 login">
                <div class="col-md-5">
                    <a href="{{ route('account') }}" class="navbar-link">Mon compte:</a>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <a href="{{route('logout')}}" class="navbar-link"
                       style="color: red!important;"><strong>Déconnexion</strong></a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('identifyUser') }}"><strong>{{Auth::user()->email}}</strong></a>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <a href="{{route('client')}}" class="navbar-link"
                       style="color: red!important;"><strong>Espace client</strong></a>
                </div>
            </div>
        @else
            <div class="col-md-2 login">
                <a href="{{ route('identifyUser') }}"><strong>Espace client</strong></a>
            </div>
        @endif

    </div>

    <div class="row nav_menu">
        <div class="col-md-1 col-md-offset-1">
            <div class="ui simple dropdown item">
                Produits
                <div class="menu">

                    @foreach($menu as $value )

                        @if(!empty($value->option_group_id))
                            <div class="item">
                                <i class="dropdown icon"></i>
                                <div class="item menu_poduct">{{ $value->option_name }}</div>
                                <div class="right menu">
                                    @foreach($menu as $key )

                                        @if($value->option_group_id == $key->option_id)
                                            <div class="product menu_poduct item {{ $key->option_id }}" style="color: black;" title="{{ $key->table_name }}">{{ $key->option_name }}</div>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                                @endif


                            @endforeach

                </div>
            </div>

        </div>
        <div class="col-md-1">
            <div class="ui simple dropdown item">
                Service
                <div class="menu menu_poduct">
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('verification') }}">Vérification des fichiers</a></div>
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('compositions') }}">Compositions</a></div>
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('delay') }}">Délai ultra rapide</a></div>
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('utiles') }}">Liens utiles</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="ui simple dropdown item">
                Devis
                <div class="menu">

                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('device') }}">Devis en ligne</a></div>
                    <div class="item"><a  class="menu_poduct" style="text-underline: none; color: black" href="{{ route('contacts') }}">Devis autres produits</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="ui simple dropdown item">
                Commander
                <div class="menu ">
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('payement') }}">Moyens de paiement</a></div>
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('device') }}">Commander en ligne</a></div>

                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="ui simple dropdown item">
                Drivers
                <div class="menu">
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('techniques') }}">Infos techniques</a></div>
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('livraison') }}">Livraison</a></div>
                    <div class="item"><a class="menu_poduct" style="text-underline: none; color: black" href="{{ route('faq') }}">FAQ</a></div>
                </div>
            </div>
        </div>



        <ul style="list-style-type: none;" class="contact_menu col-md-2 col-lg-offset-1">
            <li>
                <a  href="{{ route('contacts') }}">Nous contacter</a>
            </li>

        </ul>


    </div>

</nav>
