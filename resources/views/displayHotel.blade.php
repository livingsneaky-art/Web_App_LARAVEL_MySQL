@extends('home')

@section('displayUserHotels')
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
                        <form action="deleteHotel" method='POST'>
                            @csrf
                            @method('delete')
                            <input type="hidden" name='hotelid' value='{{$row->id}}'>
                            <div class="row justify-content-center">
                                <input type="submit" class=" btn btn-primary" value='Delete Reserved Hotel'>
                            </div>
                        </form>
                </td>
                <td>{{ $row->user_name }}<hr> 
                                    
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
