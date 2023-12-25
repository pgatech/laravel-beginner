<x-app-layout>
    <h2>Edit Student</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}" required>
        </div>
        <div class="mb-3">
            <label for="major" class="form-label">Major</label>
            <input type="text" class="form-control" id="major" name="major" value="{{ $student->major }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</x-app-layout>