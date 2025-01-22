<x-app-layout>
    <x-section>
        <div class="text-3xl font-black text-center uppercase">Movie Lists</div>

        {{-- search / filter --}}
        <form method="GET" action="{{ route('movies.index') }}" class="join w-full">
            <div>
                <input type="text" name="search" class="input input-bordered join-item" placeholder="Search" />
            </div>
            <select name="filter" class="select select-bordered join-item">
                <option disabled selected>Filter</option>
                <option value="sci-fi">Sci-fi</option>
                <option value="drama">Drama</option>
                <option value="action">Action</option>
            </select>
            <div class="indicator">
                <span class="indicator-item badge badge-secondary">new</span>
                <button type="submit" class="btn join-item">Search</button>
            </div>
        </form>

        {{-- movie table list --}}
        <div class="w-full overflow-x-auto">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th class="uppercase">id</th>
                        <th class="uppercase">title</th>
                        <th class="uppercase">director</th>
                        <th class="uppercase">date</th>
                        {{-- <th class="uppercase">cast</th> --}}
                        <th class="uppercase">run time</th>
                        {{-- <th class="uppercase">synopsis</th> --}}
                        <th class="uppercase">created at</th>
                        {{-- <th class="uppercase">updated at</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $movie['id'] }}</td>
                            <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                            <td>{{ $movie['director'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($movie['date'])->format('M d, Y') }}</td>
                            {{-- <td>{{ $movie['cast'] }}</td> --}}
                            <td>{{ \Carbon\Carbon::parse($movie['run_time'])->format('H:i:s') }}</td>
                            {{-- <td>{{ $movie['synopsis'] }}</td> --}}
                            <td>{{ \Carbon\Carbon::parse($movie['created_at'])->format('M d, Y') }}</td>
                            {{-- <td>{{ $movie['updated_at'] }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-section>
</x-app-layout>

{{-- @foreach ($movies as $movie)
    <tr>
        <td>{{ $movie['id'] }}</td>
        <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
        <td>{{ $movie['director'] }}</td>
        <td>{{ $movie['date'] }}</td>
        <td>{{ $movie['cast'] }}</td>
        <td>{{ $movie['run_time'] }}</td>
        <td class="truncate">{{ $movie['synopsis'] }}</td>
        <td>{{ $movie['created_at'] }}</td>
        <td>{{ $movie['updated_at'] }}</td>
    </tr>
@endforeach --}}
