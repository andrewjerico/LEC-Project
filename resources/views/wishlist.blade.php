@extends('layouts.template')

@section('content')
<div class="p-5">
    @if($wishlist->count() != 0)
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
                          @method('delete')
                          @csrf
                          <input type="hidden" value="{{ $list->place->name }}" name="place_name">
                          <button class="btn btn-danger" type="submit">Remove</button>
                        </form>
                    </td>
                  </tr>
                
            @endforeach
        </tbody>
      </table>
      <div class="pagination-links mt-5 d-flex justify-content-between">
          <p class="text-muted">
              Showing {{ $wishlist->firstItem() }} to {{ $wishlist->lastItem() }}
              of total {{ $wishlist->total() }} entries
          </p>
          {{ $wishlist->withQueryString()->links() }}
      </div>
      @else
      <div class="no-result text-muted">
          <i class="bi bi-emoji-frown" style="font-size: 10rem"></i>
          <h4>No Results Found</h4>
      </div>
      @endif
</div>
@endsection