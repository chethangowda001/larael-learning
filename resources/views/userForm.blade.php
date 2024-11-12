<div>
   <div class="alert alert-danger">
    @if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
 <li>{{$error}};</li>

    
@endforeach
</ul>

        
    @endif
   </div>

   <h1>Hello i am Use-Form</h1>

   <form action="addUser" method="post">
    @csrf
     <div class="input-wrapper">
        <input type="text" name="username" placeholder="enter your username" >
     </div>
     <div class="input-wrapper">
        <input type="text" name="email" placeholder="enter your email">
     </div>
     <div class="input-wrapper">
        <input type="text" name="city" placeholder="enter your city">
     </div>
     <div class="div">
        <h2> Skill </h2>
        <input type="checkbox" name="skill[]" id="node" value="node">
        <label for="node">node</label>
        <input type="checkbox" name="skill[]" id="php" value="php">
        <label for="php">Php</label>
        <input type="checkbox" name="skill[]" id="java" value="java">
        <label for="java">Java</label>
     </div>
     <div>
        <h2>Gender</h2>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
     </div>
     <div class="input-wrapper">
        <button type="submit">Submit</button>
     </div>
   </form>
   
</div>

<style>
    input {
        padding: 10px;
    border: 2px solid orange;
    margin: 5px;
    color: black;
    }

    button {
        padding: 10px 20px;
        background-color: red;
        color: white;
        margin: 10px
    }

    .alert {
        background-color: red;
        color: white;
    }
</style>

