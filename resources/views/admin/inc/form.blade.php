<form method="POST" action="{{$action}}" enctype="multipart/form-data">

    @csrf
    @method($method)

    @foreach($fields as $field)

        <div class="form-group">
            <h6 class="card-subtitle mb-4 mt-4">{{$field['label']}}</h6>
            @if($field['type']=='text')
                <input type="text" class="form-control" name="{{$field['name']}}" placeholder="" value="{{isset($data) ? $data->{$field['name']} : ''}}">
            @endif
            @if($field['type']=='number')
                <input type="number" class="form-control" name="{{$field['name']}}" value="{{isset($data) ? $data->{$field['name']} : ''}}">
            @endif
            @if($field['type']=='file')
                <input multiple type="file" class="form-control" name="{{$field['name']}}">

                @if(isset($data))
                    @if(count(json_decode($data->image)))
                        @foreach(json_decode($data->image) as $image)
                            <div class="icon">
                                <button type="button" class="delete-icon">×</button>
                                <img class="table-image" src="{{url('assets/images', $image)}}" alt="">
                                <input type="hidden" name="old_image[]" value="{{$image}}">
                            </div>
                        @endforeach
                    @endif
                @endif
            @endif
            @if($field['type']=='select')
                <select class="form-control" name="{{$field['name']}}" id="">
                    <option value="0">Выберите</option>
                    @foreach($field['options'] as $key => $value)
                        <option {{isset($data) ? $data->{$field['name']} == $key ? 'selected' : null : ''}} value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            @endif
            @if($field['type']=='textarea')
                <textarea id="{{$field['id']}}" class="form-control" rows="3" name="{{$field['name']}}" placeholder="">{{isset($data) ? $data->{$field['name']} : ''}}</textarea>
            @endif
            @if($field['type']=='checkbox')
                <div class="checkboxes">
                   
                    @foreach($field['options'] as $key => $value)
                        <?php
                            if(isset($data)) {
                                $reception = (array)json_decode($data->reception);
                            }
                        ?>
                        <div class="form-group">
                            <label for="day-{{$key}}">{{$value}}</label>
                            <input {{ isset($reception[$key]) ? 'checked' : null }} name="time[{{$key}}]" id="day-{{$key}}" type="checkbox" {{isset($data) ? $data->{$field['name']} == $key ? 'checked' : null : ''}} value="{{$key}}">
                            <div class="hours">
                                <input value="{{ isset($reception[$key]->from) ? $reception[$key]->from : null }}" type="time" class="form-control" name="from[{{$key}}]">
                                <input value="{{ isset($reception[$key]->to) ? $reception[$key]->to : null }}" type="time" class="form-control" name="to[{{$key}}]">
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    @endforeach

    <input type="submit" class="btn btn-success" value="Отправить">

</form>
