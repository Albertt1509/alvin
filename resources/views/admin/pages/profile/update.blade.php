@include('admin.dashboard.side')
<div class="content">
    <h2>Edit Profile</h2>
    <!-- Form untuk menambahkan profil -->
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" value="{{ $profile->judul }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Penulis:</label>
            <input type="text" name="nama" class="form-control" value="{{ $profile->nama }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" required value="{{ $profile->tanggal }}">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control" required value="{{ $profile->gambar }}">
        </div>
        <div class="form-group">
            <label for="narasi">Narasi:</label>
            <textarea name="narasi" class="form-control" rows="5" required>{{ $profile->narasi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
