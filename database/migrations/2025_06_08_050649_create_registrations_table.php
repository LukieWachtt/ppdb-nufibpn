<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Data Siswa
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->integer('anak_ke');
            $table->integer('berapa_bersaudara');
            $table->string('nik');
            $table->enum('agama', ['islam']);
            $table->enum('jenjang', ['sd', 'smp', 'sma']);
            $table->string('nomor_telepon_siswa');
            $table->string('file_pas_foto_siswa');
            $table->string('file_kartu_keluarga');

            // Data Kesehatan Siswa
            $table->decimal('berat_badan_kg');
            $table->decimal('tinggi_badan_cm');
            $table->string('penyakit_keturunan');
            $table->string('penyakit_menular');

            // Domisili
            $table->string('alamat');
            $table->string('alamat_lengkap');
            $table->string('kode_pos');
            $table->string('negara');
            $table->string('kota');
            $table->string('provinsi');

            // Wali Murid
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nomor_telepon_wali');
            $table->enum('pekerjaan_wali', [/*'pegawai_negeri', 'swasta', 'wirausaha' */'kantoran', 'guru', 'lainnya']);
            $table->enum('rentang_penghasilan_wali_jt', ['0-5', '5-10', '10+']);

            // Prestasi Siswa
            $table->string('file_sertifikat_1')->nullable();
            $table->string('file_sertifikat_2')->nullable();
            $table->string('file_sertifikat_3')->nullable();
            $table->string('file_sertifikat_4')->nullable();

            // $table->string('name');
            // $table->string('akta');
            // $table->string('kartu_id_anak')->nullable();
            // $table->string('ktp_wali');
            // $table->string('pas_foto');
            // $table->string('nilai_rapor')->nullable();
            // $table->integer('age');
            // $table->string('surat_keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
