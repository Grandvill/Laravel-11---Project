<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
                'title' => 'Keamanan Siber: Pentingnya Melindungi Data Pribadi',
                'author_id' => 1,
                'category_id' => 1,
                'slug' => 'keamanan-siber-pentingnya-melindungi-data-pribadi',
                'body' => 'Dalam era digital ini, keamanan siber menjadi salah satu aspek yang paling krusial bagi individu dan organisasi. Keamanan siber merujuk pada praktik melindungi sistem, jaringan, dan program dari serangan digital. Serangan ini biasanya bertujuan untuk mengakses, mengubah, atau menghancurkan informasi sensitif; memeras uang dari pengguna; atau mengganggu operasi bisnis normal.

                Salah satu ancaman terbesar adalah serangan phishing, di mana penjahat siber mengelabui individu untuk memberikan informasi pribadi melalui email yang tampaknya berasal dari sumber tepercaya. Untuk melindungi data pribadi, penting bagi pengguna untuk selalu memperbarui perangkat lunak keamanan, menggunakan kata sandi yang kuat, dan waspada terhadap email dan tautan yang mencurigakan.'
            ]
        );
        Post::create([
                'title' => 'Cloud Computing: Mengubah Cara Bisnis Beroperasi',
                'author_id' => 2,
                'category_id' => 3,
                'slug' => 'cloud-computing-mengubah-cara-bisnis-beroperasi',
                'body' => 'Cloud computing telah merevolusi cara bisnis beroperasi dengan menyediakan akses mudah ke sumber daya komputasi dan penyimpanan data melalui internet. Teknologi ini memungkinkan bisnis untuk menghindari investasi besar dalam infrastruktur IT dan memungkinkan skala yang lebih fleksibel sesuai dengan kebutuhan.

                Salah satu keuntungan utama dari cloud computing adalah skalabilitasnya. Bisnis dapat dengan mudah menambah atau mengurangi kapasitas sesuai dengan permintaan. Selain itu, cloud computing juga menawarkan biaya operasional yang lebih rendah, karena perusahaan hanya membayar untuk sumber daya yang mereka gunakan. Contoh layanan cloud yang populer termasuk Amazon Web Services (AWS), Google Cloud Platform (GCP), dan Microsoft Azure.'
            ]
        );
        Post::create([
                'title' => 'Kecerdasan Buatan (AI) dalam Dunia Bisnis',
                'author_id' => 3,
                'category_id' => 4,
                'slug' => 'kecerdasan-buatan-ai-dalam-dunia-bisnis',
                'body' => 'Kecerdasan buatan (AI) semakin memainkan peran penting dalam dunia bisnis, dengan aplikasi yang meliputi otomasi proses bisnis, analisis data, dan interaksi pelanggan. AI dapat membantu bisnis dalam membuat keputusan yang lebih baik dengan menganalisis data dalam jumlah besar dan menemukan pola yang tidak dapat ditemukan oleh manusia.

                Salah satu aplikasi AI yang paling umum adalah chatbots, yang digunakan untuk memberikan layanan pelanggan 24/7. Selain itu, AI juga digunakan dalam analisis prediktif untuk memperkirakan tren masa depan berdasarkan data historis. Perusahaan seperti Google, IBM, dan Microsoft terus mengembangkan teknologi AI untuk berbagai keperluan bisnis.'
            ]
        );
        Post::create([
                'title' => 'Internet of Things (IoT): Menghubungkan Dunia',
                'author_id' => 4,
                'category_id' => 3,
                'slug' => 'internet-of-things-iot-menghubungkan-dunia',
                'body' => 'Internet of Things (IoT) merujuk pada jaringan perangkat fisik yang terhubung ke internet, memungkinkan mereka untuk mengumpulkan dan berbagi data. IoT mencakup segala sesuatu mulai dari perangkat rumah pintar seperti termostat dan lampu hingga sistem industri seperti mesin di pabrik.

                IoT memiliki potensi untuk meningkatkan efisiensi di berbagai sektor. Misalnya, dalam pertanian, sensor IoT dapat digunakan untuk memantau kondisi tanah dan cuaca, sehingga petani dapat membuat keputusan yang lebih tepat tentang kapan dan bagaimana mengelola tanaman mereka. Di sektor kesehatan, perangkat IoT dapat memantau pasien secara real-time, memungkinkan intervensi medis yang lebih cepat dan lebih tepat. Namun, dengan meningkatnya penggunaan IoT, keamanan dan privasi data menjadi tantangan yang harus diatasi.'
            ]
        );
        Post::create([
                'title' => 'Menjadi Pengembang Web: Panduan Singkat untuk Memulai',
                'author_id' => 5,
                'category_id' => 2,
                'slug' => 'menjadi-pengembang-web-panduan-singkat-untuk-memulai',
                'body' => 'Web programming adalah keterampilan yang sangat berharga di era digital saat ini. Dengan internet yang terus berkembang, permintaan untuk pengembang web yang berbakat semakin meningkat. Jika Anda tertarik untuk memulai karier di bidang ini atau sekadar ingin memahami dasar-dasar web programming, berikut adalah panduan singkat yang dapat membantu Anda.

                Apa Itu Web Programming?
                Web programming, atau pengembangan web, adalah proses pembuatan dan pemeliharaan situs web. Ini mencakup berbagai tugas mulai dari membuat halaman web yang statis hingga aplikasi web yang dinamis dan kompleks. Pengembangan web dibagi menjadi dua bagian utama: front-end dan back-end.

                Front-End Development
                Front-end development berfokus pada bagian situs web yang dilihat dan berinteraksi dengan pengguna. Tugas utama seorang front-end developer adalah memastikan situs web terlihat menarik dan mudah digunakan. Berikut adalah beberapa teknologi utama yang digunakan dalam front-end development:

                HTML (HyperText Markup Language): Bahasa dasar untuk membuat struktur halaman web.
                CSS (Cascading Style Sheets): Digunakan untuk menata dan mengatur tampilan halaman web.
                JavaScript: Menambahkan interaktivitas dan dinamisme pada halaman web.
                Front-end developers juga sering menggunakan berbagai framework dan pustaka seperti React, Angular, dan Vue.js untuk membuat pengembangan lebih efisien dan terstruktur.

                Back-End Development
                Back-end development berfokus pada server, database, dan logika aplikasi yang tidak terlihat oleh pengguna. Ini mencakup pengelolaan data, otentikasi pengguna, dan interaksi antara server dan browser. Teknologi utama yang digunakan dalam back-end development meliputi:

                Node.js: Platform yang memungkinkan JavaScript berjalan di server.
                PHP: Bahasa pemrograman yang banyak digunakan untuk pengembangan web.
                Python: Dengan framework seperti Django dan Flask.
                Ruby: Dengan framework Ruby on Rails.
                Back-end developers juga bekerja dengan basis data untuk menyimpan dan mengelola data aplikasi. Basis data dapat berupa relasional (seperti MySQL dan PostgreSQL) atau non-relasional (seperti MongoDB).'
            ]
        );
        Post::create([
                'title' => 'Machine Learning: Mengubah Data Menjadi Informasi Berharga',
                'author_id' => 1,
                'category_id' => 5,
                'slug' => 'machine-learning-mengubah-data-menjadi-informasi-berharga',
                'body' => 'Machine Learning (ML) adalah teknologi yang memungkinkan komputer untuk belajar dari data dan membuat prediksi atau keputusan tanpa harus diprogram secara eksplisit. Dalam dunia yang semakin digital, ML menjadi krusial bagi berbagai industri untuk menganalisis data besar dan mendapatkan wawasan berharga.

                Salah satu aplikasi utama ML adalah dalam rekomendasi produk, seperti yang digunakan oleh platform e-commerce untuk memberikan saran produk yang relevan kepada pengguna. Dengan menganalisis riwayat pembelian dan perilaku pengguna, algoritma ML dapat memberikan rekomendasi yang dipersonalisasi, meningkatkan pengalaman pengguna dan penjualan.

                Untuk mengoptimalkan manfaat ML, penting bagi organisasi untuk mengumpulkan dan memproses data berkualitas tinggi, serta memilih model yang tepat untuk setiap tugas. Tantangan seperti overfitting, di mana model terlalu sesuai dengan data latihan, harus diatasi untuk memastikan prediksi yang akurat.

                Dengan penerapan yang tepat, Machine Learning dapat menjadi alat yang sangat kuat dalam mengubah data menjadi informasi berharga dan mendukung pengambilan keputusan yang lebih baik.'
            ]
        );
        Post::create([
                'title' => 'Cloud Computing: Menghadirkan Inovasi dan Efisiensi',
                'author_id' => 4,
                'category_id' => 3,
                'slug' => 'cloud-computing-menghadirkan-inovasi-dan-efisiensi',
                'body' => 'Cloud computing adalah teknologi yang memungkinkan akses ke sumber daya komputasi seperti server, penyimpanan, dan aplikasi melalui internet. Dalam era digital saat ini, cloud computing menjadi sangat penting bagi individu dan organisasi untuk meningkatkan efisiensi dan fleksibilitas operasional.

                Salah satu manfaat utama cloud computing adalah skalabilitas. Dengan cloud, perusahaan dapat dengan mudah menyesuaikan kapasitas dan sumber daya sesuai kebutuhan, tanpa perlu investasi besar pada infrastruktur fisik. Ini sangat berguna bagi bisnis yang mengalami fluktuasi permintaan atau memerlukan sumber daya tambahan untuk proyek sementara.'
            ]
        );
        Post::create([
                'title' => 'Pemrograman Web: Membangun Dunia Digital',
                'author_id' => 5,
                'category_id' => 2,
                'slug' => 'pemrograman-web-membangun-dunia-digital',
                'body' => 'Pemrograman web adalah proses pembuatan dan pengembangan situs web serta aplikasi web yang dapat diakses melalui internet. Dalam era digital yang terus berkembang, pemrograman web memainkan peran vital dalam menghubungkan pengguna dengan informasi, layanan, dan produk secara online.

                Salah satu komponen utama dalam pemrograman web adalah front-end development, yang berfokus pada bagian dari situs web yang dilihat dan berinteraksi langsung dengan pengguna. Teknologi utama yang digunakan dalam front-end development meliputi HTML untuk struktur, CSS untuk desain dan tata letak, serta JavaScript untuk interaktivitas. Framework dan pustaka populer seperti React, Angular, dan Vue.js membantu pengembang menciptakan pengalaman pengguna yang dinamis dan responsif.'
            ]
        );

    }
}
