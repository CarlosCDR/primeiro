<html>

    <head>
         <link rel="stylesheet" type="text/css" media="all" href="resources/css/main.css">
         <link href="{{ asset('css/main.css') }}" rel="stylesheet">
         <title>Clientes</title>
    </head>

    <body>
       
         <div id="BarraMenu">
            <h1>Clientes</h1>

            <div id="Links">
               
               <b><a href="">Home</a>
               <b><a href="">Projeto</a>
               <b><a href="">Contato</a>
               <b><a href="">Sobre</a></b>

            </div>
          </div>
      <form method="POST" action="/cliente">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $cliente->id }}" /> 
        <div id="Cadastro">
           

           <div class="card">
               
               <div class="card-top">
                
                 <h2 class="title">Cadastro de Clientes</h2>
                 
               </div>

               <div class="card-group">
                   <label>Nome</label>
                   <input type="text" id="nome" name="nome" placeholder="Digite Seu Nome aqui" value="{{ $cliente->nome }}" />
               </div>

               <div class="card-group">
                   <label>CPF</label>
                   <input type="text" id="cpf" name="cpf" placeholder="Digite Seu CPF aqui" value="{{ $cliente->cpf }}" />
               </div>
                <div class="card-group">
                   <label>E-mail: </label>
                   <input type="email" id="email" name="email" placeholder="Digite Seu E-mail aqui" value="{{ $cliente->email }}" />
               </div>
               <div class="card-group">
                   <label>Telefone: </label>
                   <input type="text" id="telefone" name="telefone" placeholder="Digite Seu Telefone aqui" value="{{ $cliente->telefone }}" />
               </div>
               <div class="card-group">
                   <label>Data de Nascimento</label>
                   <input type="date" id="data_nascimento" name="data_nascimento"  value="{{ $cliente->data_nascimento }}" />
               </div>

               <div class="card-groupbtn">
                   <button type="submit">Salvar</button><br><br>

               </div>
               <div class="card-group">

                  <button type="submit"><a href="/cliente">Novo</a></button>
               </div>
           </div>
      
       </div>
      </form>    
       <div id="Cadastro">
           

           <div class="card">
               
               <div class="card-top">
                
                 <div>
                <h1>Listagem</h1>
      
      <table border="1">
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clientes as $cliente)
            <tr>
              <td>{{ $cliente->nome }}</td>
              <td>{{ $cliente->email }}</td>
              <td>
                <a href="/cliente/{{ $cliente->id }}/edit">Editar</a>
              </td>
              <td>
                <form action="/cliente/{{ $cliente->id }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE" />
                  <button type="submit">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>  
      
    </div>
      
       </div>

    </body>


</html>