<ul>
@foreach($editoras as $editora)
<li>Nome: {{$editora->nome}}</li>
<li>Codigo: {{$editora->id_editora}}</li>
    <li>Morada:  {{$editora->morada}}</li><br>
@endforeach
</ul>
{{$editoras->render()}}
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show',['id'=>$editora->id_editora])}}">
    {{$editora->nome}}
    </a>
</li>
@endforeach