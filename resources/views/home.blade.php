@extends('layouts.dashbord')
@section('content')
<table class="table">
    <thead class="bg-light">
        <tr class="border-0">
            <th class="border-0">#</th>
            <th class="border-0">Long Link</th>
            <th class="border-0">Short Link</th>
            <th class="border-0 text-center" colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @if (count($shortLinks)>0)


        @foreach ($shortLinks as $key=>$shortLink )
        <tr>
            <td><a href="#">{{ $key+1 }}</a></td>
            <td>{{ $shortLink->link }} </td>
            <td>{{ url('/') . '/' . $shortLink->code }} </td>
            <td>
                <a href="{{ url('/') . '/' . $shortLink->code }}">
                <button class="btn btn-outline-dark btn-sm ">View</button>
              </a>
            </td>

            <td>
                <a href="#" class="btn btn-primary btn-block" data-mylink="{{ $shortLink->link }}" data-toggle="modal" data-target="#EditUrlModal{{ $key }}">
                    <i class="fas fa-edit"></i>
                    Edit
                  </a>
              </a>
               {{-- Edit modal --}}
               <div class="modal fade" id="EditUrlModal{{ $key }}">
                <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header bg-primary text-white">
                              <h5 class="modal-title">Edit Url</h5>
                                 <button class="close" data-dismiss="modal">
                                          <span>&times;</span>
                                    </button>
                            </div>
                     <div class="modal-content">
                         <div class="modal-body">
                               <form action="{{ route('admin.link.update',$shortLink->id) }}" method="POST" id="editform" >
                                    @csrf
                                        @method('put')
                                           <div class="form-group">
                                              <label for="title">Long Url</label>
                                                <input type="text" name="link" id="title" class="form-control" value="{{ $shortLink->link }}">
                                         </div>
                                                 <div class="modal-footer">
                                                     <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</button>
                                                    </div>
                                </form>
                              </div>
                         </div>
                     </div>
                </div>
         </div>
            </td>


            <td>
                <!-- Button delete modal -->
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal{{$shortLink->id}}">
                    <i class="fas fa-trash"></i>
                  Delete
                </button>

                <div class="modal fade" id="deleteModal{{$shortLink->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex flex-nowrap">

                        <button type="button" class="close order-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-dark order-1" id="myModalLabel">Delete Url</h4>
                      </div>
                      <div class="modal-body text-dark">
                        Are you sure you want to delete?
                      </div>
                      <div class="modal-footer">
                        <form id="userForm" action="{{ route('admin.link.destroy',[$shortLink->id] )}}" method="post">
                        @csrf
                          @method('DELETE')
                          <input type="hidden" name="id">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </td>
        </tr>
        @endforeach
        @else
        <div class="alert alert-warning" role="alert">
            There are No Links!
        </div>
        @endif
    </tbody>
</table>
@endsection
