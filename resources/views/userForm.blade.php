<div>
    {{-- Display Errors --}}
    {{-- <div class="alert alert-danger">
       @if ($errors->any())
       <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
       </ul>
       @endif
    </div> --}}
 
    <h1>Hello, I am Use-Form</h1>

    {{URL::current()}}

    {{url()->current()}}

    <h4>
      <a href="user"> lara page</a>
    </h4>

    <h4>
      {{URL::to('user')}} lara page
    </h4>
 
    <form action="addUser" method="post">
       @csrf
       {{-- Username Field --}}
       <div class="input-wrapper">
          <input type="text" name="username" placeholder="Enter your username" value="{{ old('username') }}" class="{{$errors->first("username")?'input-error':''}}">
          <span style="color: red">
             @error('username')
             {{ $message }}
             @enderror
          </span>
       </div>
 
       {{-- Email Field --}}
       <div class="input-wrapper">
          <input type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}" class="{{$errors->first("email")?'input-error':''}}">
          <span style="color: red">
             @error('email')
             {{ $message }}
             @enderror
          </span>
       </div>
 
       {{-- City Field --}}
       <div class="input-wrapper">
          <input type="text" name="city" placeholder="Enter your city" value="{{ old('city') }}" class="{{$errors->first("city")?'input-error':''}}">
          <span style="color: red">
             @error('city')
             {{ $message }}
             @enderror
          </span>
       </div>
 
       {{-- Skills --}}
       <div>
          <h2>Skill</h2>
          <input type="checkbox" name="skill[]" id="node" value="node" {{ is_array(old('skill')) && in_array('node', old('skill')) ? 'checked' : '' }} >
          <label for="node">Node</label>
          <input type="checkbox" name="skill[]" id="php" value="php" {{ is_array(old('skill')) && in_array('php', old('skill')) ? 'checked' : '' }} >
          <label for="php">PHP</label>
          <input type="checkbox" name="skill[]" id="java" value="java" {{ is_array(old('skill')) && in_array('java', old('skill')) ? 'checked' : '' }}>
          <label for="java">Java</label>
          <span style="color: red">
             @error('skill')
             {{ $message }}
             @enderror
          </span>
       </div>
 
       {{-- Gender --}}
       <div>
          <h2>Gender</h2>
          <input type="radio" name="gender" id="male" value="male" {{ old('gender') === 'male' ? 'checked' : '' }}>
          <label for="male">Male</label>
          <input type="radio" name="gender" id="female" value="female" {{ old('gender') === 'female' ? 'checked' : '' }}>
          <label for="female">Female</label>
          <span style="color: red">
             @error('gender')
             {{ $message }}
             @enderror
          </span>
       </div>
 
       {{-- Submit Button --}}
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
       margin: 10px;
    }
 
    .alert {
       background-color: red;
       color: white;
    }

    .input-error{
        border: 3px solid red;
    }
 </style>
 