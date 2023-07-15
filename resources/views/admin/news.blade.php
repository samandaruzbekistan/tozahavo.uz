@extends('admin.header')
@section('section')
    <button id="tugma" class="btn btn-primary mb-3" onclick="showForm()">Yangilik qo'shish</button>
    <form id="forma" class="col-9" action="{{ route('add_news') }}" style="display: none" method="post" enctype="multipart/form-data">
        @csrf
        <div class="custom-file mb-3">
            <input required type="file" name="photo" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Post uchun rasm</label>
        </div>
        <div class="form-group">
            <input required type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title uz">
        </div>
        <div class="form-group">
            <input required type="text" name="title_ru" class="form-control" id="exampleFormControlInput1" placeholder="Title ru">
        </div>
        <div class="form-group">
            <input required type="text" name="title_en" class="form-control" id="exampleFormControlInput1" placeholder="Title en">
        </div>
        <textarea required class="form-control mt-3" name="body">Yangilik matni!</textarea>
        <textarea required class="form-control mt-3" name="body_ru">Yangilik matni ru!</textarea>
        <textarea required class="form-control mt-3" name="body_en">Yangilik matni en!</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table" id="jadval">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Title</th>
            <th scope="col">Datatime</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $id => $item)
            <tr>
                <th scope="row">{{ $id }}</th>
                <th class="col-3"><img class="img-fluid" src="../images/{{ $item->photo }}"></th>
                <th scope="row">{{ $item->title }}</th>
                <th scope="row">{{ $item->created_at }}</th>
                <td><a href="{{ route('news_edit', ['id' => $item->id]) }}"><i class="fas fa-edit"></i></a></td>
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



