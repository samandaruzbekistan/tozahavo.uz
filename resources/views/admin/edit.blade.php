@extends('admin.header')
@section('section')
    <form id="forma" class="col-9" action="{{ route('update_text') }}"  method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $text->id }}">
        <div class="form-group">
            <textarea name="uz" class="form-control" >{{ $text->uz }}</textarea>
        </div>
        <div class="form-group">
            <textarea name="ru" class="form-control">{{ $text->ru }}</textarea>
        </div>
        <div class="form-group">
            <textarea name="en" class="form-control">{{ $text->en }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Yangilash</button>
    </form>
@endsection






