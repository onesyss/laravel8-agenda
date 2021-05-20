@extends('templates.template')

@section('content')
<section class="text-center" style="background-color: black;color:white;"/>
  <br><h1>Agenda de Tarefas para o time de desenvolvimento <a href="http://setran.pa.gov.br/site/" target="_blank">SETRANS - PA</a></h1><hr><hr>
</section> <br>
    {{--  <h1 class="text-center">Agenda</h1> <hr>  --}}

    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
      @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nº</th>
                <th scope="col">Tarefa</th>
                <th scope="col">Nível de Urgência</th>
                <th scope="col">Prazo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach($book as $books)
                  @php
                    $user =$books->find($books->id)->relUsers;
                  @endphp

                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$books->title}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{\Carbon\Carbon::parse($books->date)->format('d/m/Y')}}</td>

                  <td>
                    <a href="{{url("books/$books->id")}}">
                      <button class="btn btn-dark">Visualizar</button>
                    </a>

                    <a href="{{url("books/$books->id/edit")}}">
                      <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("books/$books->id")}}" class="js-del">
                      <button class="btn btn-danger">Deletar</button>
                    </a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
           {{-- {{$book->links()}}  --}}
        </div>  
        
        {{--  <footer style="position: absolute;
        bottom: 0;
        background-color: rgb(68, 68, 70);
        color: #FFF;
        width: 100%;
        height: 100px;    
        text-align: center;
        line-height: 100px;">
        <p>Criado por <a href="https://github.com/onesyss" target="_blank">Marlon Miranda</a> - Desenvolvedor FullStack Jr.</p>
        </footer>   --}}
@endsection