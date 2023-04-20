<!DOCTYBE html>

<body>

@foreach ($students as $student)
    
    {{ $student['id'] }}-{{ $student['name']}}
    <br>
@endforeach


</body>



</html>