<ul>
@foreach($edicoes as $edicao)
<li>Codigo: {{$edicao->id_livro}}</li>
<li>data: {{$edicao->data}}</li>
@endforeach
</ul>
{{$edicoes->render()}}
@foreach($edicoes as $edicao)
<li>
<a href="{{route('edicoes.show',['id'=>$edicao->id_livro])}}">
    {{$edicao->id_livro}}
    </a>
</li>
@endforeach