
<x-message-banner msg="user login successfully" class="success"/>

<x-message-banner msg="user sign successfuly"  class="success"/>
<x-message-banner msg="invalid password"  class="error"/>
<h1>Hello Laravel</h1>

@for($i=1; $i<=10; $i++)
 <h1>{{$i}}</h1>
@endfor


<style>
    .success {
    background: lightgreen;
    color: "green";
    padding: 10px 10px;
    margin: 10px;
    display: block;
    }

    .error {
    background: rgb(255, 0, 0);
    color: rgb(208, 91, 91);
    padding: 10px 10px;
    margin: 10px;
    display: block;
    }
</style>
