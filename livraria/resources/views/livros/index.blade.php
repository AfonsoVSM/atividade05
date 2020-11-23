<ul>
@foreach($livros as $livro)
<li>Titulo: {{$livro->titulo}}</li>
<li>Codigo: {{$livro->id_livro}}</li>
    <li>Idioma:  {{$livro->idioma}}</li><br>
@endforeach
</ul>
{{$livros->render()}}
@foreach($livros as $livro)
<li>
<a href="{{route('livros.show',['id'=>$livro->id_livro])}}">
    {{$livro->titulo}}
    </a>
</li>
@endforeach