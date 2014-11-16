<div class="login-form">
        {{ Form::open(['action' => 'IndexController@postLogin']) }}
        <fieldset>
            <legend>Login</legend>
            {{ Form::label('username','Usuario') }}
            {{ Form::text('username',Input::old('username'),['placeholder'=>'Nombre de usuario']) }}
            {{ Form::label('password','Contraseña') }}
            {{ Form::password('password',['placeholder'=>'Contraseña']) }}
            {{ Form::submit('Conectarse',['class'=>'button tiny radius']) }}
        </fieldset>
        {{ Form::close() }}
        @if($errors->has())
            @foreach ($errors->all() as $message)
                <span class="label alert round">{{$message}}</span><br><br>
            @endforeach
        @endif
        @if(Session::has('failure'))
            <span class="label alert round">{{Session::get('failure')}}</span>
        @endif
</div>

