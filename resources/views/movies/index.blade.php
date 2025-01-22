<x-app-layout>
    <div class="flex flex-col justify-center items-center w-screen h-screen">
        <div class="container mx-auto space-y-4 text-md p-8 rounded-lg border border-gray-500">
            <div class="overflow-x-auto max-h-[750px]">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>director</th>
                        <th>date</th>
                        <th>cast</th>
                        <th>run time</th>
                        <th>synopsis</th>
                        <th>created at</th>
                        <th>updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie['id'] }}</td>
                            <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                            <td>{{ $movie['director'] }}</td>
                            <td>{{ $movie['date'] }}</td>
                            <td>{{ $movie['cast'] }}</td>
                            <td>{{ $movie['run_time'] }}</td>
                            <td>{{ $movie['synopsis'] }}</td>
                            <td>{{ $movie['created_at'] }}</td>
                            <td>{{ $movie['updated_at'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
