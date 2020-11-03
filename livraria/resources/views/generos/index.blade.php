<ul>
@foreach($generos as $genero)
<li>Designação: {{$genero->designacao}}</li>
<li>Codigo: {{$genero->idg}}</li>
    <li>Observações:  {{$genero->observavoes}}</li><br>
@endforeach
</ul>
{{$generos->render()}}