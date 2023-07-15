@extends('admin.header')
@section('section')
    <form id="forma" class="col-9" action="{{ route('update_news') }}"  method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $news->id }}">
        <div class="custom-file mb-3">
            <input type="file" name="photo" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Yangi rasm</label>
        </div>
        <div class="col-4 mb-3">
            <img src="../images/{{ $news->photo }}" class="img-fluid">
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleFormControlTextarea">Yangilik title</label>
            <input name="title" id="exampleFormControlTextarea" class="form-control" value="{{ $news->title }}">
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleFormControlTextarea">Yangilik title ru</label>
            <input name="title_ru" id="exampleFormControlTextarea" class="form-control" value="{{ $news->title_ru }}">
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleFormControlTextarea">Yangilik title en</label>
            <input name="title_en" id="exampleFormControlTextarea" class="form-control" value="{{ $news->title_en }}">
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Yangilik matni uz</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{ $news->body }}</textarea>
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Yangilik matni ru</label>
            <textarea class="form-control" name="body_ru" id="exampleFormControlTextarea1" rows="3">{{ $news->body_ru }}</textarea>
        </div>
        <hr>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Yangilik matni en</label>
            <textarea class="form-control" name="body_en" id="exampleFormControlTextarea1" rows="3">{{ $news->body_en }}</textarea>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary">Yangilash</button>
    </form>
@endsection






