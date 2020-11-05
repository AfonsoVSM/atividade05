<ul>
@foreach($editoras as $editora)
<li>Nome: {{$editora->nome}}</li>
<li>Codigo: {{$editora->ide}}</li>
    <li>Morada:  {{$editora->morada}}</li><br>
@endforeach
</ul>
{{$editoras->render()}}
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show',['id'=>$editora->ide])}}">
    {{$editora->nome}}
    </a>
</li>
@endforeach