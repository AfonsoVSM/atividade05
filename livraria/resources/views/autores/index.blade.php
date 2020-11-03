<ul>
@foreach($autores as $autor)
<li>Nome: {{$autor->nome}}</li>
<li>Codigo: {{$autor->ida}}</li>
    <li>Nacionalidade:  {{$autor->nacionalidade}}</li><br>
@endforeach
</ul>
{{$autores->render()}}