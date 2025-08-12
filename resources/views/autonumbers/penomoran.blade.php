<!-- resources/views/form-penomoran.blade.php -->

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Form Penomoran Otomatis Baru</h2>

    <form action="{{ route('penomoran.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <!-- Nomor Dimulai -->
            <div>
                <label class="block text-sm font-medium mb-1">Nomor Dimulai</label>
                <input type="number" name="nomor_dimulai" class="w-full border rounded px-3 py-2" value="1">
            </div>

            <!-- Kombinasi Variabel -->
            <div>
                <label class="block text-sm font-medium mb-1">Kombinasi Variabel *</label>
                <input type="text" name="kombinasi" class="w-full border rounded px-3 py-2" placeholder="{KS}-{N}/{S}/{K}/{M}/{Y}">
                <small class="text-gray-500">Format penulisan: {KS}-{K}_{N}/{S}/{V1}/{V2}/{V3}/{V4}/{V5}/{M}/{Y}</small>
            </div>

            <!-- Reset Nomor -->
            <div>
                <label class="block text-sm font-medium mb-1">Reset Nomor *</label>
                <select name="reset_nomor" class="w-full border rounded px-3 py-2">
                    <option value="tahunan">Tahunan</option>
                    <option value="bulanan">Bulanan</option>
                    <!-- Tambah opsi lain jika perlu -->
                </select>
            </div>

            <!-- Jenis Penulisan Bulan -->
            <div>
                <label class="block text-sm font-medium mb-1">Jenis Penulisan Bulan *</label>
                <select name="jenis_penulisan_bulan" class="w-full border rounded px-3 py-2">
                    <option disabled selected>Pilih Jenis Penulisan Bulan</option>
                    <option value="romawi">Angka Romawi</option>
                    <option value="arab">Angka Arab</option>
                </select>
            </div>

            <!-- Jenis Penomoran -->
            <div class="col-span-2">
                <label class="block text-sm font-medium mb-1">Jenis Penomoran *</label>
                <select name="jenis_penomoran" class="w-full border rounded px-3 py-2">
                    <option disabled selected>Pilih Jenis Penomoran</option>
                    <!-- Tambahkan opsi jika ada -->
                </select>
            </div>

            <!-- Variabel 1 -->
            <div>
                <label class="block text-sm font-medium mb-1">Variabel 1</label>
                <input type="text" name="variabel1" class="w-full border rounded px-3 py-2" placeholder="Masukkan variabel 1...">
            </div>

            <!-- Variabel 2 -->
            <div>
                <label class="block text-sm font-medium mb-1">Variabel 2</label>
                <input type="text" name="variabel2" class="w-full border rounded px-3 py-2" placeholder="Masukkan variabel 2...">
            </div>
        </div>

        <button type="submit" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>

    <div class="mt-6 p-4 bg-gray-50 rounded">
        <h3 class="font-semibold mb-2">Keterangan kombinasi variabel</h3>
        <ul class="text-sm space-y-1">
            <li>✔️ <strong>KS</strong> : Kode Sifat Naskah</li>
            <li>✔️ <strong>K</strong> : Klasifikasi</li>
            <li>✔️ <strong>N</strong> : Nomor</li>
            <li>✔️ <strong>V</strong> : Variabel</li>
            <li>✔️ <strong>M</strong> : Bulan</li>
            <li>✔️ <strong>Y</strong> : Tahun</li>
            <li>✔️ <strong>S</strong> : Singkatan Unit Kerja / Satker</li>
            <li>✔️ <strong>/ , -</strong> : Pemisah Kode</li>
        </ul>
    </div>
</div>
