@section('content')

<div class="row">
    <div class="large-8 large-centered medium-10 medium-centered small-12 columns">
        <h1>Gelieve eerst in te loggen</h1>
    </div>
</div>

<div class="row">
    <div class="large-8  large-centered medium-10 medium-centered small-12 medium-centered columns">
        <div class="panel">
            {{ Form::open(array('url' => 'admin/login/check', 'method' => 'post')) }}
                <div class="row">
                    <div class="large-12 columns">
                        {{ Form::email('email', $value = null, $attributes = array('placeholder' => 'E-mail Adres')); }}
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns">
                        {{ Form::password('password', $attributes = array('placeholder' => 'Paswoord') ); }}
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns">
                        {{ Form::submit('Log in', $attributes = array('class' => 'small large-12 medium-12 small-12 radius button')); }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop