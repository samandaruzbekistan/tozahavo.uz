@extends('admin.header')
@section('section')
    <button id="tugma" class="btn btn-primary mb-3" onclick="showForm()">Yangi rasm</button>
    <form id="forma" class="col-9" action="{{ route('new_partner') }}" style="display: none" method="post" enctype="multipart/form-data">
        @csrf
        <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <form id="forma2" class="col-9" action="{{ route('update_partner') }}" style="display: none" method="post" enctype="multipart/form-data">
        @csrf
        <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input" id="customFile">
            <input type="hidden" id="inp" name="photo_id" value="">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table" id="jadval">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $id => $item)
            <tr>
                <th scope="row">{{ $id }}</th>
                <th class="col-3"><img class="img-fluid" src="../images/{{ $item->name }}"></th>
                <td><button onclick="editPhoto({{ $item->id }})"><i class="fas fa-edit"></i></button></td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection


@section('script')
    <script>
        function editPhoto(id) {
            document.getElementById('inp').value = id;
            document.getElementById('forma2').style.display = "block";
            document.getElementById('tugma').style.display = "none";
            document.getElementById('jadval').style.display = "none";
        }

        function showForm(id) {
            document.getElementById('forma').style.display = "block";
            document.getElementById('tugma').style.display = "none";
            document.getElementById('jadval').style.display = "none";
        }
    </script>
@endsection



