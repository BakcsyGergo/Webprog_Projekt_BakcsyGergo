<a href="{{route('movies.create')}}"> Add new Movie</a>
<table border="1">
@foreach ($movies as $movie)
    <tr>
        <td>
                {{$movie->id}}
        </td>
        <td>
            {{$movie->title}}
        </td>
        <td>
                    {{$movie->length}}
         </td>
         <td>
                    {{$movie->description}}
         </td>
         <td>
            <a href="{{route('movies.edit',$movie->id)}}">Edit</a>
        </td>
         <td>
            <form method="post" 
            action="{{route('movies.destroy',$movie->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
         </td>
    </tr>
    @endforeach
</table>