<div>
    <h1>data page  i am </h1>

    {{-- <pre>
        {{print_r($users)}};
    </pre> --}}

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
