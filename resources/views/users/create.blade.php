
<!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>CREATE</title>
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

 <h2>Команда {{   'CREATE' }}</h2>
<form  method="POST" action="{{ route('users.create', ['user' => $user->id]) }}" >
    @csrf
      <div>
        <label for="name">name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}">
    </div>

         <div>
             <label for="email">email:</label>
             <input type="text" id="email" name="{{ $user->email }}" >
         </div>

{{--         <div>--}}
{{--             <label for="password">password:</label>--}}
{{--             <input type="text" id="password" name="{{ $user->password }}">--}}
{{--         </div>--}}

    <button type="submit" name="submit" value="create">Создать пользователя</button>

</form>
</body>
