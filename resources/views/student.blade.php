<div>
    <h1>this is student page</h1>
   <pre> {{print_r($student)}}</pre>

   <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>  
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $stud)
        <tr>
            <td>{{$stud->id}}</td>
            <td>{{$stud->name}}</td>
            <td>{{$stud->email}}</td>
            <td>{{$stud->batch}}</td>
        </tr>
            
        @endforeach
        
    </tbody>
   </table>
</div>
