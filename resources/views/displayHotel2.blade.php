@extends('adminHome')

@section('displayAdminHotels')
    <div class="container">    
        <div class="panel panel-default">
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="30%">Hotels</th>
                    <th width="70%">Name</th>
                </tr>
                @foreach($data as $row)
                <tr>
                    <td>
                        <img src="store_image/fetch_image/{{ $row->id }}"  class="img-thumbnail" style="height:271px; max-height: 336px; max-width:336px; width: 263px;" />
                            <form action="deleteHotel2" method='POST'>
                                @csrf
                                @method('delete')
                                <input type="hidden" name='hotelid' value='{{$row->id}}'>
                                <div class="row justify-content-center">
                                    <input type="submit" class=" btn btn-primary" value='Delete User Reserved Hotel'>
                                </div>
                            </form>
                    </td>

                    <td>{{ $row->user_name }}<hr> 
                        <form action="updateHotel2" method='POST'>
                            @csrf
                            @method('put')
                            <input type="hidden" name='hotelid' value='{{$row->id}}'>
                            <div class="panel-body">
                                <br />
                                <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4" align="right">Enter New Hotel Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="user_name" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" align="center">
                                        <input type="submit" name="store_image" class="btn btn-primary" value="Change Hotel Name" />
                                    </div>
                                </form>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>           
        </div>
        </div>
        </div>
    </div>
@endsection
