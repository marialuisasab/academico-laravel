@extends('layout.principal')

@section('conteudo')

      <h1>Inserir Aluno</h1>
        <form method="post" action="/alunos">

        {{csrf_field()}}

        <div class="form-group">
          <label for="nome"> Nome </label>
          <input type="text" class="form-control" name="nome"/>
        </div>
        <div class="form-group">

          <div class="form-group">
            <label for="rua"> Rua </label>
            <input type="text" class="form-control" name="rua"/>
          </div>
          <div class="form-group">

            <div class="form-group">
              <label for="numero"> Numero </label>
              <input type="text" class="form-control" name="numero"/>
            </div>
            <div class="form-group">

              <div class="form-group">
                <label for="bairro"> Bairro </label>
                <input type="text" class="form-control" name="bairro"/>
              </div>
              <div class="form-group">

        <label for="cidade_id"> Cidade</label>
          <select name="cidade_id">
            @foreach($cidades as $c)
              <option value="{{$c->id}}"> {{$c->nome}}</option>
            @endforeach
          </select>

          <div class="form-group">
            <label for="cep"> Cep </label>
            <input type="text" class="form-control" name="cep"/>
          </div>
          <div class="form-group">

            <div class="form-group">
              <label for="mail"> Email </label>
              <input type="text" class="form-control" name="mail"/>
            </div>
            <div class="form-group">

        </div>


        <input type="submit" class="btn btn-primary" value="Salvar" />

        <a href="/cidades" class="btn btn-primary"> Voltar </a>
        </form>

@endsection
