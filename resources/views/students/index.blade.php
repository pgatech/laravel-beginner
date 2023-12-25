<x-app-layout>
    <h2>Data Students</h2>
    <div class="mb-3">
        <form action="{{ route('students.index') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari student..." name="search" value="{{ request('search') }}">
                <button type="submit" class="btn btn-outline-secondary">Cari</button>
            </div>
        </form>
    </div>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            {{ $message }}
        </div>
    @endif

    {{ $students->appends(request()->input())->links() }}

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>NIM</th>
                <th>Major</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->major }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
