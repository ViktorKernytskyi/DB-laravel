<h1>Users list</h1>
<table border="1" cellspacing="0">

    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Действие</th>

        <th>Действие</th>
    </tr>


@foreach($users as $user)


    <tr>
        <td> {{$user->id}} </td>
        <td> {{$user->name}}</td>
        <td> {{$user->email}}</td>

        <td>
{{--            <a href="/form/{{ $user->id  }}">update</a>--}}
{{--            <a href="http://laravel/form/{{ $user->id  }}">update</a>--}}
            <a href="{{ route('users.form', ['variable' => $user->id]) }}">update</a>

        </td>
            <form  method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}" >
                @csrf
                @method('DELETE')
                <td>
            <button type="submit" name="submit" value="destroy">delete</button>

        </td>
            </form>
    </tr>
    @endforeach

</table>
<a href="{{ route('users.form') }}">create</a>
