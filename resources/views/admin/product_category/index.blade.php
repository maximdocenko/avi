@extends("admin.app")
@section("content")
    
            <table class="table">
                @foreach($data as $item)
                    <tr>
                        <td>
                            
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
