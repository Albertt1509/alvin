@include('admin.dashboard.side')

<div class="content">
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <h2>Tambah Profile</h2>
    <!-- Form untuk menambahkan profil -->
    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Penulis:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="narasi">Narasi:</label>
            <textarea name="narasi" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>


</div>
