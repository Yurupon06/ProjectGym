@extends('dashboard.master')
@section('title', 'Product Categories')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'Product Categories')
@section('page', 'ProductCategories')
@section('main')
    @include('dashboard.main')

      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header pb-0">
                <a href="{{route('productcategories.create')}}"><span class="badge badge-sm bg-gradient-primary mb-3 fs-6 ">add new item</span></a>
                <h6>Product Category</h6>
              </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" id="datatable">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Categorie</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cycle</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($productcat as $i => $dt)
                        
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              {{ $i + 1 . " . " }}
                            </div>
                          </td>
                          <td>
                            {{ $dt->category_name }}
                          </td>
                          <td>
                            {{ $dt->type }}
                          </td>
                          <td>
                            {{ $dt->cycle }}
                          </td>
                        
                          <td class="align-middle text-center text-sm">
                            <a href="{{ route('productcategories.edit', $dt->id) }}"><span class="badge badge-sm bg-gradient-success">edit</span></a>
                            <form action="{{ route('productcategories.destroy', $dt->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="badge badge-sm bg-gradient-danger" onclick="return confirm('Are you sure you want to delete this category?')">hapus</button>
                            </form>
                          </td>
                        
                          
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

@endsection