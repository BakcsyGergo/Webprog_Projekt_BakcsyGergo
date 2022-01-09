@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('movies.update', $movie->id)}}">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" value="{{$movie->title}}"/>
    </div>

    <div class="form-group">
        <label for="length">Length:</label>
        <input type="text" class="form-control" name="length" value="{{$movie->length}}"/>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" name="description" value="{{$movie->description}}"/>
    </div>
        <button type="submit" class="btn btn-primary">Update</button>
</form>