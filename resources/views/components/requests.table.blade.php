<table class="table table-striped table-hover">
  <thead class="table-dark">

    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Azioni</th>
    </tr>

  </thead>
  <tbody>
   
    @foreach ($roleRequests as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>

        @switch($role)
            @case('Amministratore')
            <form action="{{route('admin.setAdmin', $user)}}" method="POST">
                @csrf
                @method('PATCH')
             <button class="btn btn-danger">Attiva{{$role}}</button>
       </form>
       @break
       @endswitch
      </td>
    </tr>
    @endforeach
  </tbody>
</table>