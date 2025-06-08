<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    // Based on these
    // 
    // Data Siswa
    // $table->string('nama');
    // $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
    // $table->date('tanggal_lahir');
    // $table->string('tempat_lahir');
    // $table->integer('anak_ke');
    // $table->integer('berapa_bersaudara');
    // $table->string('nik');
    // $table->enum('agama', ['islam']);
    // $table->enum('jenjang', ['sd', 'smp', 'sma']);
    // $table->string('nomor_telepon_siswa');
    // $table->string('file_pas_foto_siswa');
    // $table->string('file_kartu_keluarga');

    // // Data Kesehatan Siswa
    // $table->decimal('berat_badan_kg');
    // $table->decimal('tinggi_badan_cm');
    // $table->string('penyakit_keturunan');
    // $table->string('penyakit_menular');

    // // Domisili
    // $table->string('alamat');
    // $table->string('alamat_lengkap');
    // $table->string('kode_pos');
    // $table->string('negara');
    // $table->string('kota');
    // $table->string('provinsi');

    // // Wali Murid
    // $table->string('nama_ayah');
    // $table->string('nama_ibu');
    // $table->string('nomor_telepon_wali');
    // $table->enum('pekerjaan_wali', [/*'pegawai_negeri', 'swasta', 'wirausaha' */'kantoran', 'guru', 'lainnya']);
    // $table->enum('rentang_penghasilan_wali_jt', ['0-5', '5-10', '10+']);

    // // Prestasi Siswa
    // $table->string('file_sertifikat_1')->nullable();
    // $table->string('file_sertifikat_2')->nullable();
    // $table->string('file_sertifikat_3')->nullable();
    // $table->string('file_sertifikat_4')->nullable();
    protected $fillable = [
        'user_id',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'anak_ke',
        'berapa_bersaudara',
        'nik',
        'agama',
        'jenjang',
        'nomor_telepon_siswa',
        'file_pas_foto_siswa',
        'file_kartu_keluarga',
        'berat_badan_kg',
        'tinggi_badan_cm',
        'penyakit_keturunan',
        'penyakit_menular',
        'alamat',
        'alamat_lengkap',
        'kode_pos',
        'negara',
        'kota',
        'provinsi',
        'nama_ayah',
        'nama_ibu',
        'nomor_telepon_wali',
        'pekerjaan_wali',
        'rentang_penghasilan_wali_jt',
        'file_sertifikat_1',
        'file_sertifikat_2',
        'file_sertifikat_3',
        'file_sertifikat_4',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}