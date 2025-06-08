<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
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
        return [
            'user_id' => 1,
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['laki-laki', 'perempuan']),
            'tanggal_lahir' => fake()->date(),
            'tempat_lahir' => fake()->city(),
            'anak_ke' => fake()->numberBetween(1, 5),
            'berapa_bersaudara' => fake()->numberBetween(1, 5),
            'nik' => fake()->unique()->numerify('###########'),
            'agama' => fake()->randomElement(['islam']),
            'jenjang' => fake()->randomElement(['sd', 'smp', 'sma']),
            'nomor_telepon_siswa' => fake()->phoneNumber(),
            'file_pas_foto_siswa' => fake()->imageUrl(),
            'file_kartu_keluarga' => fake()->imageUrl(),
            'berat_badan_kg' => fake()->randomFloat(2, 50, 80),
            'tinggi_badan_cm' => fake()->randomFloat(2, 120, 160),
            'penyakit_keturunan' => fake()->word(),
            'penyakit_menular' => fake()->word(),
            'alamat' => fake()->address(),
            'alamat_lengkap' => fake()->address(),
            'kode_pos' => fake()->postcode(),
            'negara' => fake()->country(),
            'kota' => fake()->city(),
            'provinsi' => fake()->state(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'nomor_telepon_wali' => fake()->phoneNumber(),
            'pekerjaan_wali' => fake()->randomElement(['kantoran', 'guru', 'lainnya']),
            'rentang_penghasilan_wali_jt' => fake()->randomElement(['0-5', '5-10', '10+']),
            // 'file_sertifikat_1' => fake()->imageUrl(),
            // 'file_sertifikat_2' => fake()->imageUrl(),
            // 'file_sertifikat_3' => fake()->imageUrl(),
            // 'file_sertifikat_4' => fake()->imageUrl(),
        ];
    }
}
