<div>
  @foreach ($art as $a)
  <div class="card">
    <div class="card-header">
      <span class="d-flex justify-content-center text-light"> <strong class="text-primary"> Data Terbaru </strong></span> 
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $a->judul }}</h5>
      <p class="card-text">{{ $a->deskripsi }}</p>
      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
  </div>
  @endforeach
</div>
