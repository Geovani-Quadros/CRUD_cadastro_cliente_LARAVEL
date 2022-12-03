<a href=" {{route('home')}} ">Home</a>

@if (session('msg'))
    <div>
        {{ session('msg') }}
    </div>
    <br>
@endif

<h1>Cadastrar cliente</h1>

<section>
    <form action="{{route('createClient')}}" method="POST">
        @csrf
        @method('post')

        <label for="name">
            <span>Nome</span>
            <input type="text" name="name">
        </label><br>

        <label for="cnpj">
            <span>CNPJ</span>
            <input type="text" name="cnpj">
        </label><br>

        <label for="phone">
            <span>Telefone</span>
            <input type="tel" name="phone">
        </label><br>
        
        <label for="email">
            <span>E-mail</span>
            <input type="email" name="email">
        </label><br>

        <label for="address">
            <span>Endereço</span>
            <input type="text" name="address">
        </label><br>
        
        <input type="submit" value="Cadastrar">

    </form>
</section>