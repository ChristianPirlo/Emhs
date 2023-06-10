<div>
    <table class="table table-bordered mt-2">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            {{-- <th scope="col" class="text-center">Aksi</th> --}}
          </tr>
        </thead>
      <tbody>
        @foreach ($task as $idx => $data)
        <tr>
            <td>{{ $data->id }}</td> 
           <td>{{ $data->nama }}</td>
           <td>{{ $data->judul }}</td>
           <td>{{ $data->deskripsi }}</td>
          </tr> 
          @endforeach
    </tbody>
    </table>
    <div class="alert alert-succes" role="alert">
        Total Data : {{$task->count()}}
    </div>
 </div>

   {{-- <div class="card-body">
        <h5 class="card-title">{{ $a->nama }}</h5>
        <h5 class="card-title">{{ $a->judul }}</h5>
        <p class="card-text">{{ $a->deskripsi }}</p>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
  