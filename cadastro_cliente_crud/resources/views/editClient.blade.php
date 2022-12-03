<a href="{{route('home')}}">Home</a>
<hr>

<h1>Editar Cliente</h1>

<section>
    <form action="{{route('updateClient', $clientEdit->id)}}" method="post">
        @csrf
        @method('put')

        <div>
            <label for="name">Nome.......</label>
            <input type="text" name="name" value="{{$clientEdit->name}}">
        </div>
        
        <div>
            <label for="cnpj">Cnpj.........</label>
            <input type="text" name="cnpj" value="{{$clientEdit->cnpj}}">
        </div>

        <div>
            <label for="phone">Telefone...</label>
            <input type="tel" name="phone" value="{{$clientEdit->phone}}">
        </div>

        <div>
            <label for="email">E-mail......</label>
            <input type="email" name="email" value="{{$clientEdit->email}}">
        </div>
        
        <div>
            <label for="address">Endereço..</label>
            <input type="text" name="address" value="{{$clientEdit->address}}">
        </div>

        <div>
            <button type="submit">Editar</button>
        </div>
    </form>

</section>