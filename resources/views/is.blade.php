@include('products/nav')

<div>
    <form method="POST" action="/notas" style="width: 50%; margin:0 auto;">
        @csrf
        <input
            type="text"
            name="nombre"
            placeholder="Username"
            class="form-control mb-2"
        />
        <input
            type="text"
            name="descripcion"
            placeholder="Password"
            class="form-control mb-2"
        />
        <button class="btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
        <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
    </form>
</div>
