<ul>
@foreach($livros as $livro)
<li>{{$livro->titulo}}
{{$livro->idl}}
{{$livro->idioma}}</li>
@endforeach
</ul>
{{$livros->render()}}