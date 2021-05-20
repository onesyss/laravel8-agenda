@extends('templates.template')

@section('content')<hr>
    <h1 class="text-center"><a href="/books?page=1">Visualizar</a></h1> <hr>


    <div class="col-8 m-auto">
        @php
            $user=$book->find($book->id)->relUsers;
        @endphp
        <h4>
        Assunto: {{$book->title}}<br><br>
        </h4>
        <p>
        Descrição: {{$book->description}}<br><br>
        Data de entrega: {{\Carbon\Carbon::parse($book->date)->format('d/m/Y')}}<br><br>
        Nível de Urgência: {{$user->name}} <br><br>
        {{--  Enviar para repositório: {{$user->link}}  --}}
        </p>
    </div>

    <footer style="position: absolute;
    bottom: 0;
    background-color: rgb(68, 68, 70);
    color: #FFF;
    width: 100%;
    height: 100px;    
    text-align: center;
    line-height: 100px;">
      <p>Criado por <a href="https://github.com/onesyss" target="_blank">Marlon Miranda</a> - Desenvolvedor FullStack Jr.</p>
    </footer>    
@endsection