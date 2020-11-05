<ul>
@foreach($generos as $genero)
<li>Designação: {{$genero->designacao}}</li>
<li>Codigo: {{$genero->idg}}</li>
    <li>Observações:  {{$genero->observavoes}}</li><br>
@endforeach
</ul>
{{$generos->render()}}
@foreach($generos as $genero)
<li>
<a href="{{route('generos.show',['id'=>$genero->idg])}}">
    {{$genero->designacao}}
    </a>
</li>
@endforeach