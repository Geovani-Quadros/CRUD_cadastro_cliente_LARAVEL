<a href=" {{route('home')}} ">Home</a>

<h1>Listagem de Cliente</h1>

@if (session('msg'))
    <div>
        {{session('msg')}}
    </div>
    <br>
@endif

<section>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Endereço</th>
                
            </tr>
            
            @foreach ($clients as $client)                
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->cnpj}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->address}}</td>
                    <td>
                        <button>
                            <a href="{{route('viewEditClient', $client->id)}}">Editar</a>
                        </button>
                    </td>    
                    <td>
                        <form action=" {{route('deleteUser', $client->id)}} " method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Excluir</button>            
                        </form>
                    </td>
                </tr>   
            @endforeach
        </table>
</section>