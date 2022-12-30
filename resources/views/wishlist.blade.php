@extends('layouts.template')

@section('content')
<div class="ps-5 pe-5">
    <table class="table table-borderless">
        <thead>
          <tr class="">
            <th scope="col" class="fs-5">Photo</th>
            <th scope="col" class="fs-5">Place Name</th>
            <th scope="col" class="fs-5">Price</th>
        
          </tr>
        </thead>
        <tbody class="">
            @foreach ($wishlist as $list)
                <tr class="border">
                    <td scope="row"> 
                        <img src="{{ asset('storage/'.$list->place->image) }}" class="card-img-top" style="height: 150px; width: 250px">
                    </td>
                    <td class="align-middle">{{ $list->place->name }}</td>
                    <td class="align-middle">Rp. {{ $list->place->price }}</td>
                    <td class="align-middle text-white"> 
                        <form action="/wishlist/{{ $list->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Remove</button>
                        </form>
                    </td>
                  </tr>
                
            @endforeach
        </tbody>
      </table>
      {{-- <div class="d-flex justify-content-center">
        <div class="align-center">
          {{ $watchlist->links() }}
        </div>
      </div> --}}
      
</div>
@endsection