@extends('admin.header')
@section('section')
    <button id="tugma" class="btn btn-primary mb-3" onclick="showForm()">Yangi text</button>
    <form id="forma" class="col-9" action="{{ route('new_text') }}" style="display: none" method="post">
        @csrf
        <div class="form-group">
            <textarea name="uz" class="form-control" >Uz</textarea>
        </div>
        <div class="form-group">
            <textarea name="ru" class="form-control">Ru</textarea>
        </div>
        <div class="form-group">
            <textarea name="en" class="form-control">En</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table" id="jadval">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Uzbek</th>
            <th scope="col">Russian</th>
            <th scope="col">English</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($texts as $id => $item)
            <tr>
                <th scope="row">{{ $id }}</th>
                <td>{{ $item->uz }}</td>
                <td>{{ $item->ru }}</td>
                <td>{{ $item->en }}</td>
                <td><a href="{{ route('edit_text', ['id' => $item->id]) }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a> </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection


@section('script')
    <script>
        function showForm() {
            document.getElementById('forma').style.display = "block";
            document.getElementById('tugma').style.display = "none";
            document.getElementById('jadval').style.display = "none";
        }
    </script>
@endsection



