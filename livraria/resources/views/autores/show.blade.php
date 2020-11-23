ID:{{$autor->id_autor}}<br>
Designação:{{$autor->nome}}<br>
Observações:{{$autor->nacionalidade}}<br><br>
<h2>Livros:</h2>
@foreach ($autor->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach