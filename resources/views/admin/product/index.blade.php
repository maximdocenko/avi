@extends("admin.app")
@section("content")
    
            <table class="table">
                @foreach($data as $item)
                    <tr>
                        <td>
                            @foreach(json_decode($item->image) as $image)
                                <div class="icon">
                                    <img class="table-image" src="{{url('assets/images', $image)}}" alt="">
                                </div>
                            @endforeach
                        </td>
                        <td>
                            {{$item->title}}
                        </td>
                        <td>
                            <a href="{{ route('product.edit',$item->id)  }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        
@endsection
