<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test template</h1>

    @php
        $name ='reni';

        $fruits = array('mango', 'apel', 'melon');

        $age = 5;
    @endphp

    @include('header')

    <h2>{{ $name }}</h2>

    <h2>fruits : </h2>
    @foreach($fruits as $fruit)
    <ul>
        <li>{{ $fruit }}</li>
    </ul>    
    @endforeach

   @for($i = 0; $i < 10; $i++)
       {{ $i }} <br>
   @endfor

   <br>

   @if(count($fruits)==1)

   single fruit
   @elseif(count($fruits)>1)
   more than one fruit
   @else
   no fruit
   @endif

   <br>
   {{ $age >=18 ? 'you are adult' : 'you are not adult' }}
</body>
</html>