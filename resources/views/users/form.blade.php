<!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>UPDATE</title>
 </head>
 <body>
 <style>
     label {
         display: inline-block;
         width: 170px;
     }
     form > div {
         margin-bottom: 5px;
     }
     td:nth-child(5), td:nth-child(6) {
         text-align: center;
     }
     table {
         border-spacing: 0;
         border-collapse: collapse;
     }
     td, th {
         padding: 10px;
         border: 1px solid black;
     }
 </style>

 <h2>Команда {{  $user->id ? 'UPDATE' : 'CREATE' }}</h2>
 <form  method="POST"
       @if($user->id) action="{{ route('users.update', ['user' => $user->id]) }}" @endif
       @if(!$user->id) action="{{ route('users.create') }}" @endif
 >
     @csrf
     @php $method = $user->id ? 'PUT' : 'POST' @endphp
     @method($method)
     {{--     @csrf_field--}}
{{--     @method_field('PUT')--}}
     <div>
         <label for="name">name:</label>
         <input type="text" id="name" name="name" value="{{ $user->name }}">
     </div>

     <div>
         <label for="email">email:</label>
         <input type="text" id="email" name="email" value="{{ $user->email }}" >
     </div>
     @if(!$user->id)

        <div>
            <label for="password">password:</label>
            <input type="text" id="password" name="password value="{{ $user->password }}">
        </div>
     @endif

     @if($user->id)
         <button type="submit" name="submit" value="update">Обновить запись</button>
     @endif
     @if(!$user->id)
         <button type="submit" name="submit" value="update">Создать запись</button>
     @endif


 </form>
 </body>
