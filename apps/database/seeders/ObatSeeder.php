<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Acyclovir Tablet',
         'efek_samping' => 'Pusing atau kantuk, sakit kepala, mual atau muntah, diare, demam',
         'gambar' => '07-acyclovir.jpg',
         'harga' => 7000,
         'stok' => 10,
         'deskripsi' => 'Mengatasi infeksi virus herpes, seperti cacar air, cacar ular, atau herpes simplex',
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Adem Sari',
         'efek_samping' => '(Jarang terjadi) Jika dikonsumsi berlebihan dapat menyebabkan sakit perut, kembung, sensasi rasa panas (heartburn), mual atau sakit kepala ',
         'gambar' => '08-ademsari.jpg',
         'harga' => 2000,
         'stok' => 10,
         'deskripsi' => 'Meredakan gejala panas dalam, seperti sariawan, sakit tenggorokan, dan sulit buang air besar'
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Bodrex',
         'efek_samping' => 'Gangguan fungsi hati, gangguan penglihatan seperti pandangan kabur atau sulit membedakan warna, mual, muntah atua nyeri perut',
         'gambar' => '09-bodrex.png',
         'harga' => 3000,
         'stok' => 20,
         'deskripsi' => 'Bodrex adalah obat yang bermanfaat untuk meringankan sakit kepala, sakit gigi, dan demam. Selain itu, obat ini juga memiliki varian yang ditujukan untuk  meredakan gejala flu, seperti bersin, hidung tersumbat, batuk berdahak, atau batuk kering.'
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Betadine (30 ml)',
         'efek_samping' => 'Gatal, ruam, bengkak pada kulit, iritasi pada kulit, mulut atau bagian tubuh yang terkena Betadine.',
         'gambar' => '10-betadine.jpg',
         'harga' => 4000,
         'stok' => 40,
         'deskripsi' => 'Betadine adalah produk antiseptik yang bermanfaat untuk mencegah pertumbuhan dan membunuh kuman penyebab infeksi. Obat antiseptik ini tersedia dalam bentuk cairan, salep, semprot, dan stik.'
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Paracetamol',
         'efek_samping' => 'Sakit kepala, Mual atau muntah, Sulit tidur, Perut bagian atas terasa sakit, Urin berwarna gelap, Lelah yang tidak biasa dan Penyakit kuning.',
         'gambar' => '01-paracetamol.jpg',
         'harga' => 1000,
         'stok' => 10,
         'deskripsi' => 'Paracetamol adalah obat untuk meredakan demam dan nyeri, termasuk nyeri haid atau sakit gigi. Paracetamol atau acetaminophen tersedia dalam bentuk tablet, sirop, tetes, suppositoria, dan infus.'
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Vitacimin (pcs)',
         'efek_samping' => 'Perut kembung, sakit perut, diare, mual, muntah, batu ginjal',
         'gambar' => '12-vitacimin.webp',
         'harga' => 2000,
         'stok' => 50,
         'deskripsi' => 'Vitacimin bermanfaat untuk menjaga kesehatan dan membantu memenuhi kebutuhan tubuh terhadap vitamin C. Suplemen ini tersedia dalam bentuk tablet.'
         
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'OBH COMBI (Menthol)',
         'efek_samping' => 'OBH COMBI PLUS BATUK FLU merupakan obat batuk dengan kandungan OBH, Paracetamol, Ephedrine HCl, dan Chlorphenamine maleat yang digunakan untuk meredakan batuk disertai gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin. ',
         'gambar' => '13-OBH Combi.png',
         'harga' => 15000,
         'stok' => 20,
         'deskripsi' => 'Obat Batuk dan Flu'
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('obat')->insert([
         'id_pengguna' => 97,
         'nama_obat' => 'Nestle Bear Brand',
         'efek_samping' => '-',
         'gambar' => '14-Bear Brand.png',
         'harga' => 4000,
         'stok' => 40,
         'deskripsi' => 'BEAR BRAND terbuat dari 100% susu murni berkualitas tinggi yang telah mengalami proses sterilisasi sehingga dapat langsung dikonsumsi.'
         ,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
 }
}
