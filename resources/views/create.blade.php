@extends('templates.template')
@inject('carbon', '\Carbon\Carbon')

@section('content')<hr>
    <h1 class="text-center">@if(isset($book))<a href="/books?description=1">Editar</a> @else <a href="/books?description=1">Cadastrar</a> @endif</h1> <hr>

    <div class="col-8 m-auto">
 
      @if(isset($errors) && count($errors)>0)
          <div class="text-center mt-4 mb-4 p-2 alert-danger">
              @foreach($errors->all() as $erro)
                {{$erro}}<br>
              @endforeach
          </div>
      @endif

      @if(isset($book))
        <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
          @method('PUT')
      @else
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
      @endif
        @csrf
        <input class="form-control" type="text" name="title" id="title" placeholder="Assunto:" value="{{$book->title ?? ''}}" required><br>
        <select class="form-control" name="id_user" id="id_user" required>
            <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Nível de Urgência'}}</option>
              @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
        </select><br>
        <input class="form-control" type="text" name="description" id="description" placeholder="Descrição:" value="{{$book->description?? ''}}" required><br>
        <input class="form-control" type="text" name="date" id="date" placeholder="Data: 00/00/2000" value="{{$book->date ?? ''}}" required><br>
        <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">
      </form>
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
         