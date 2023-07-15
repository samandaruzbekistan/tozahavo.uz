@extends('admin.header')
@section('section')
    <button id="tugma" class="btn btn-primary mb-3" onclick="showForm()">Yangi servis</button>
    <form id="forma" class="col-9" action="{{ route('new_servis') }}" style="display: none" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" required name="name" class="form-control" placeholder="Nomi">
        </div>
        <div class="custom-file">
            <input type="file" required name="photo" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    <table class="table" id="jadval">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Photo</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($servis as $id => $item)
            <tr>
                <th scope="row">{{ $id }}</th>
                    <td>{{ $item->name }}</td>
                <td>{{ $item->photo }}</td>
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



