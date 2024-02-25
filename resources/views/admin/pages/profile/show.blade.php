@include('admin.dashboard.side')

<div class="content">
    <h2>Edit Profile</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Narasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($profiles as $profile)
                <tr>
                    <td>{{ $profile->judul }}</td>
                    <td>{{ $profile->nama }}</td>
                    <td>{{ $profile->tanggal }}</td>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#gambarModal{{ $profile->id }}">Lihat</a>
                        <!-- Modal -->
                        <div class="modal fade" id="gambarModal{{ $profile->id }}" tabindex="-1"
                            aria-labelledby="gambarModalLabel{{ $profile->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="gambarModalLabel{{ $profile->id }}">Gambar Profile
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('storage/' . $profile->gambar) }}" alt="Gambar Profile"
                                            style="max-width: 100%;">
                                        {{-- Debugging: Menampilkan path gambar --}}
                                    </div>
                                </div>
                            </div>
                    </td>
                    <td>{{ $profile->narasi }}</td>
                    <td>
                        <div class="gap-2 d-flex">
                            <form action="{{ route('profile.delete', $profile->id) }}" method="POST">
                                <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
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
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Tidak ada profil yang ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
