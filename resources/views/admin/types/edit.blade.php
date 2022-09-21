@extends('layouts.app')
@section('title', 'Категории')
@section('meta')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@endsection
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Изменить тип услуги {{$type->name}}</h4>
            </div>

            <div class="card-body">
            <label for="" class="form-label">Язык</label>
            <select name="" id="" class="form-control" onchange="langChange($(this).val())">
            @foreach($langs as $key => $lang)
                    <option value="{{$lang->code}}">{{$lang->name}}</option>
            @endforeach
            </select>
            </div>

            <div class="card-body">
                <form action="{{route('admin.type.update',$type->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="form-label" for="smallInput">Категория</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $type->category_id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="form-label" for="smallInput">Название</label>
                            <input id="ru-name" class="form-control form-control-sm" value="{{$type->name}}" type="text" name="name" placeholder="">
                            @foreach($langs as $lang)
                                @if($lang->code != 'ru')
                                    <input id="{{$lang->code}}-name" placeholder="{{$lang->name}}" style="display: none" class="form-control form-control-sm" value="{{$type->getField($lang->code, 'name')}}" type="text" name="{{$lang->code}}-name">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                    <button class="btn btn-primary mt-2">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function langChange(code){
            @foreach($langs as $lang)
            $('#{{$lang->code}}-name').hide();
            @endforeach
            $('#'+code+'-name').show()
        }
    </script>
@endsection
