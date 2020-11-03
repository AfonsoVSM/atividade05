<ul>
@foreach($livros as $livro)
<li>Titulo: {{$livro->titulo}}</li>
<li>Codigo: {{$livro->idl}}</li>
    <li>Idioma:  {{$livro->idioma}}</li><br>
@endforeach
</ul>
{{$livros->render()}}