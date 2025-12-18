<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Tomboan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans flex h-screen overflow-hidden">

    <aside class="w-64 bg-[#485741] text-white flex flex-col shadow-xl">
        <div class="h-20 flex items-center justify-center border-b border-[#5a6b52]">
            <h1 class="text-2xl font-bold tracking-widest">TOMBOAN</h1>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="#" class="flex items-center px-4 py-3 bg-[#65745A] rounded-lg transition">
                <i class="fas fa-home w-6"></i> Dashboard
            </a>
            <a href="{{ url('http://127.0.0.1:8000/Home') }}" target="_blank" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-globe w-6"></i> Lihat Website
            </a>
            <a href="{{ route('admin.settings') }}" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-cog w-6"></i> Pengaturan Contact
            </a>
            <a href="{{ route('admin.gallery') }}" class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-images w-6"></i> Manajemen Gallery
            </a>
            <a href="https://docs.google.com/forms/d/1mhE7IUjqJcWeX1XZAMTKBcwce3HRLEKXLKTg__DByPA/edit"
                target="_blank"
                class="flex items-center px-4 py-3 hover:bg-[#65745A] rounded-lg transition opacity-70 hover:opacity-100">
                <i class="fas fa-clipboard-list w-6"></i> Kritik & Saran Pengunjung
            </a>
        </nav>
        <div class="p-4 border-t border-[#5a6b52]">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center text-red-300 hover:text-white transition w-full">
                    <i class="fas fa-sign-out-alt w-6"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto">

        <header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center sticky top-0 z-10">
            <h2 class="text-xl font-bold text-gray-700">Dashboard Overview</h2>
            <div class="text-sm text-gray-500">Halo, Admin Djadul Ganteng</div>
        </header>

        <div class="p-8 space-y-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-[#485741] flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Reservasi</p>
                        <h3 class="text-3xl font-bold text-gray-800">{{ $reservations->count() }}</h3>
                    </div>
                    <i class="fas fa-calendar-check text-4xl text-[#485741] opacity-20"></i>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-600 flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Cerita</p>
                        <h3 class="text-3xl font-bold text-gray-800">{{ $experiences->count() }}</h3>
                    </div>
                    <i class="fas fa-comment-dots text-4xl text-yellow-600 opacity-20"></i>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">

                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                    <h3 class="text-lg font-bold text-[#485741] mb-4">
                        <i class="fas fa-chart-line mr-2"></i> Trend Kunjungan {{ date('Y') }}
                    </h3>
                    <div class="relative h-64">
                        <canvas id="visitorChart"></canvas>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-lg font-bold text-gray-700 mb-4">Top 5 Asal Pengunjung</h3>
                    <div class="w-full md:w-1/2 mx-auto">
                        <canvas id="cityChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center mt-8 mb-4">
                <h3 class="font-bold text-xl text-[#485741]">Data Detail</h3>
                <div class="relative">
                    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari nama pengunjung..."
                        class="pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#65745A] focus:border-transparent outline-none w-64">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="bg-[#65745A] px-6 py-4 flex justify-between items-center">
                    <h3 class="text-white font-bold">Data Reservasi Masuk</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-600">
                        <thead class="bg-gray-50 text-gray-800 uppercase font-bold">
                            <tr>
                                <th class="px-6 py-3">Nama</th>
                                <th class="px-6 py-3">Tanggal Kunjungan</th>
                                <th class="px-6 py-3">Jumlah</th>
                                <th class="px-6 py-3">No. WhatsApp</th>
                                <th class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-400">
                            @foreach($reservations as $res)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-900">{{ $res->nama }}</td>
                                <td class="px-6 py-4">{{ $res->tanggal_reservasi }}</td>
                                <td class="px-6 py-4">{{ $res->jumlah_pengunjung }} Orang</td>
                                <td class="px-6 py-4">
                                    <a href="https://wa.me/{{ $res->no_tlpn }}" target="_blank" class="text-green-600 hover:underline flex items-center gap-1">
                                        <i class="fab fa-whatsapp"></i> {{ $res->no_tlpn}}
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('reservation.destroy', $res->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                        @csrf @method('DELETE')
                                        <button class="text-red-500 hover:text-red-700" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 flex gap-2">
                                    <button type="button" onclick="openEditReservasi(this)"
                                        data-id="{{ $res->id }}"
                                        data-nama="{{ $res->nama }}"
                                        data-tanggal="{{ $res->tanggal_reservasi }}"
                                        data-jumlah="{{ $res->jumlah_pengunjung }}"
                                        data-telp="{{ $res->no_tlpn }}"
                                        class="bg-yellow-100 text-yellow-600 p-2 rounded-lg hover:bg-yellow-200 transition">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="bg-yellow-600 px-6 py-4 flex justify-between items-center">
                    <h3 class="text-white font-bold">Cerita Pengalaman Pengunjung</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-600">
                        <thead class="bg-gray-50 text-gray-800 uppercase font-bold">
                            <tr>
                                <th class="px-6 py-3">Nama</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3 w-1/3">Isi Cerita</th>
                                <th class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($experiences as $exp)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-black">{{ $exp->nama }}</div>
                                    <div class="text-xs text-gray-500">{{ $exp->asal }}</div>
                                </td>

                                <td class="px-6 py-4">
                                    @if($exp->status == 'pending')
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-2 py-1 rounded">
                                        Menunggu
                                    </span>
                                    @else
                                    <span class="bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded">
                                        Tayang
                                    </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 italic text-gray-700">
                                    "{{ Str::limit($exp->cerita, 80) }}"
                                </td>

                                <td class="px-6 py-4 flex gap-2">
                                    @if($exp->status == 'pending')
                                    <form action="{{ route('experience.approve', $exp->id) }}" method="POST">
                                        @csrf @method('PUT')
                                        <button class="text-white bg-green-500 hover:bg-green-700 p-2 rounded-full transition shadow" title="Setujui / Tampilkan">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                    @endif

                                    <form action="{{ route('experience.destroy', $exp->id) }}" method="POST" onsubmit="return confirm('Hapus cerita ini permanen?')">
                                        @csrf @method('DELETE')
                                        <button class="text-white bg-red-500 hover:bg-red-700 p-2 rounded-full transition shadow" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    </main>

    <div id="modalEditReservasi" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity backdrop-blur-sm" onclick="closeEditReservasi()"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:w-full sm:max-w-lg border-t-8 border-[#65745A]">

                <div class="bg-gray-50 px-4 py-3 flex justify-between items-center border-b">
                    <h3 class="text-lg font-bold text-[#485741]">Edit Data Reservasi</h3>
                    <button type="button" onclick="closeEditReservasi()" class="text-gray-400 hover:text-red-500">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="p-6">
                    <form id="formEditReservasi" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block text-xs font-bold uppercase mb-1 text-gray-500">Nama Pemesan</label>
                            <input type="text" name="nama" id="edit_nama_res" required class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-2 focus:ring-[#65745A] outline-none">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase mb-1 text-gray-500">Tanggal</label>
                                <input type="date" name="tanggal_reservasi" id="edit_tanggal_res" required class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-2 focus:ring-[#65745A] outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase mb-1 text-gray-500">Jumlah Orang</label>
                                <input type="number" name="jumlah_pengunjung" id="edit_jumlah_res" required class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-2 focus:ring-[#65745A] outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase mb-2 text-gray-500">No. WhatsApp</label>
                            <input type="text" name="no_tlpn" id="edit_res_telp" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 font-medium focus:ring-2 focus:ring-[#65745A] outline-none transition">
                        </div>

                        <div class="text-right pt-4 border-t border-gray-100 mt-4 flex justify-end gap-3">
                            <button type="button" onclick="closeEditReservasi()" class="text-gray-500 hover:text-gray-800 font-bold text-sm px-4 py-2">
                                Batal
                            </button>
                            <button type="submit" class="bg-[#65745A] text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-[#4d5a43] transition transform active:scale-95">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            function searchTable() {
                let filter = document.getElementById("searchInput").value.toUpperCase();

                let allRows = document.querySelectorAll("tr");

                allRows.forEach(row => {
                    if (row.getElementsByTagName("th").length > 0) return;

                    let text = row.textContent || row.innerText;

                    row.style.display = text.toUpperCase().includes(filter) ? "" : "none";
                });
            }

            function openEditReservasi(button) {
                const id = button.getAttribute('data-id');
                const nama = button.getAttribute('data-nama');
                const tanggal = button.getAttribute('data-tanggal');
                const jumlah = button.getAttribute('data-jumlah');
                const wa = button.getAttribute('data-telp');

                document.getElementById('edit_nama_res').value = nama;
                document.getElementById('edit_tanggal_res').value = tanggal;
                document.getElementById('edit_jumlah_res').value = jumlah;
                document.getElementById('edit_res_telp').value = wa;

                const form = document.getElementById('formEditReservasi');
                form.action = "{{ url('/reservasi') }}/" + id;

                document.getElementById('modalEditReservasi').classList.remove('hidden');
            }

            function closeEditReservasi() {
                document.getElementById('modalEditReservasi').classList.add('hidden');
            }
        </script>

        <script>
            const ctxVisitor = document.getElementById('visitorChart').getContext('2d');
            new Chart(ctxVisitor, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                        label: 'Jumlah Pengunjung',
                        data: @json($monthlyVisitors),
                        borderColor: '#65745A',
                        backgroundColor: 'rgba(101, 116, 90, 0.2)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#485741',
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [2, 4]
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            const ctxCity = document.getElementById('cityChart').getContext('2d');
            new Chart(ctxCity, {
                type: 'doughnut',
                data: {
                    labels: @json($cityNames),
                    datasets: [{
                        data: @json($cityCounts),
                        backgroundColor: [
                            '#485741', '#65745A', '#8F9F78', '#BCC9A8', '#EBEED9'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });
        </script>
</body>

</html>