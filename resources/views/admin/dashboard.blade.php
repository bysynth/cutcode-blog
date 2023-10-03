<h1>Dashboard</h1>

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Выйти</button>
</form>
