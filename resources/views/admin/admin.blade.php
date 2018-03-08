@extends('page.admin')
@section('title')

@endsection
@section('content')
    <div class="ui middle aligned center aligned grid login_form">
        <div class="column">
            <h2 class="ui teal image header">
                Log-in to admin panel
            </h2>
            <form class="ui large form" method="post" action="{{ route('login') }}">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail address">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="ui fluid large teal submit button">Login</button>
                </div>

                <div class="ui error message"></div>

            </form>
        </div>
    </div>
@endsection