<ul>
@foreach($generos as $genero)
<li>Designação: {{$genero->designacao}}</li>
<li>Codigo: {{$genero->id_genero}}</li>
    <li>Observações:  {{$genero->observavoes}}</li><br>
@endforeach
</ul>
{{$generos->render()}}
@foreach($generos as $genero)
<li>
<a href="{{route('generos.show',['id'=>$genero->id_genero])}}">
    {{$genero->designacao}}
    </a>
</li>
@endforeach