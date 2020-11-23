ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
@if(isset($livro->autor->nome))
Autor:{{$livro->autor->nome}}
@endif