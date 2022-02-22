@extends('master')
@section('content')



  <div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
          <a href="{{ url('add-data') }}" class="btn btn-success my-3">Add Data</a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Description</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $key=>$post)
                   <tr>
                       <td>{{ $key+1 }}</td>
                       <td>{{ Str::limit($post->title,10) }}</td>
                       <td>
                         @if($post->status==1)
                         <a href="{{ url('change-status/'.$post->id) }}" onclick="return confirm('Are you Sure?')" class="btn btn-sm btn-success">Active</a>
                         @else
                         <a href="{{ url('change-status/'.$post->id) }}" onclick="return confirm('Are you Sure?')" class="btn btn-sm btn-danger">Inactive</a>
                         @endif
                       </td>
                       <td>{{ Str::limit($post->description,50) }}</td>
                       <td>
                         {{ $post->created_at->toDateString() }}
                        </td>
                        <td>
                          <a href="{{ url('edit-data/'.$post->id) }}" class="btn btn-sm btn-success">Edit</a>
                          <a href="{{ url('delete-data/'.$post->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                   </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $posts->links() }}
        </div>
    </div>

    {{-- //soft delete --}}



@endsection
