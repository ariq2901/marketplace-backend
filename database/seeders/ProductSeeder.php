<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG LN56 EASY SMART TV 32" - 3LN560BPTA',
                'rating' => 4,
                'sold' => 127,
                'harga' => 2190000,
                'jumlah' => 8,
                'description' => 'Engine : Quad Core Processor
                BLU : Direct
                HDR : HDR10
                Viewing Angle : Wide Viewing Angle
                Refresh Rate : 60 Hz
                Sound Output : 10 W (2.0ch)
                Surround : Virtual Surround
                OS : Linux
                Remote : Normal Remote
                HDMI/USB : 2/1
                Bezel : Metal-like Frame
                Pole : 2 Poles
                Depth : 89.0mm/ 76.8mm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LEGO City Space undercover starter pack',
                'rating' => 5,
                'sold' => 48,
                'harga' => 799000,
                'jumlah' => 19,
                'description' => '- Includes 2 LEGO&reg; City minifigures: an astronaut and a ground crew technician.
                - Inspired by NASA, features a rover with removable cockpit, new-for-June 2019 articulated grappling arm, tilting, removable solar panel generator and large all-terrain wheels.
                - Accessory elements include 2 new-for-June-2019 geodes, a rover pilot helmet with blue visor, technician&#39;s hard hat, remote control, laptop, rock drill and a video camera with buildable stand.
                - Rover measures over 3&rdquo; (9cm) high, 5&rdquo; (14cm) long and 3&rdquo; (9cm) wide.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PS4 PRO 1TB CUH 7006B GARANSI SONY ASIA',
                'rating' => 5,
                'sold' => 574,
                'harga' => 7199000,
                'jumlah' => 80,
                'description' => 'Pada akhir tahun 2016 lalu Sony akhirnya telah resmi merilis varian konsol PlayStation 4 Slim dan PlayStation 4 Pro, lepas tiga tahun setelah kemunculan perdana PlayStation 4 (PS4), Sony meresmikan dua varian tambahan dari konsol game populer tersebut.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adidas Alphabounce Instinc - White',
                'rating' => 5,
                'sold' => 32,
                'harga' => 2700000,
                'jumlah' => 28,
                'description' => 'Kualitas sirkulasi udara terbaik untuk kaki Anda. Sepatu running ini didesain untuk sirkulasi udara yang maksimal ketika suhu dan intensitas olahraga meningkat. Dilengkapi upper dari bahan open mesh ringan yang memaksimalkan sirkulasi udara. Area topangan pada sepatu ini menghasilkan penguat di bagian-bagian khusus untuk memaksimalkan gerakan multiarah. Bantalan yang fleksibel menghasilkan lari yang nyaman dengan sensasi yang fleksibel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Iphone 12 PRO MAX 16/128',
                'rating' => 4,
                'sold' => 67,
                'harga' => 23200000,
                'jumlah' => 59,
                'description' => 'Secara besaran resolusi memang sama, namun Apple berikan peningkatan hardware pada sensor utamanya. Yaitu pada diafragma yang lebih besar di f/1.6, di mana Apple mengklaim bisa menangkap cahaya 27% lebih banyak. Serta lensa 7 lapis yang ditingkatkan, dan teknologi stabilisasi optik (OIS) yang juga diklaim lebih stabil dari iPhone 11 Pro. Sementara spesifikasi dua sensor lainnya masih sama; ultra-wide 12MP f/2.4 dan telephoto 2x optical zoom f/2.0 dengan OIS.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UNIQLO - PULLOVER SWEAT DRY HOODIE ULTRA STRETCH PJG',
                'rating' => 5,
                'sold' => 25,
                'harga' => 470000,
                'jumlah' => 189,
                'description' => 'Nah, seri barunya yang ada tulisan ‘DRY’ itu bahannya lebih tipis dan adem, dan SUPER ELASTIS. Apalagi pinggangnya. Seri lama mungkin agak sulit untuk dinaikkin ke pinggang, apalagi yang dark green tuh karet pinggangnya minim! Kalau yang seri DRY, berasa pakai leggings deh! Suka banget!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SONY MDR-ZX110AP On Ear Headphone / ZX110 / ZX-110AP / ZX110AP',
                'rating' => 5,
                'sold' => null,
                'harga' => 780000,
                'jumlah' => 189,
                'description' => 'Headphone dengan desain simple dan terdapat microfon untuk menerima panggilan telpon dimanapun anda berada. Bantalan telinga yang empuk cocok untuk pemakaian jangka panjang. desain yang unik dalam lipat membuat mudah untuk dibawa, Panjang kabel 1.2 m. warna yang elegan dan minimalis ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KONKA Oven Listrik pemanggang penghangat makanan',
                'rating' => 4,
                'sold' => 238,
                'harga' => 465000,
                'jumlah' => 189,
                'description' => 'Konka oven listrik kapasitas hingga 13 L. Oven ini memiliki elemen pemanas atas dan bawah. Oven ini terbuat dari stainless steel. Dilengkapi dengan temperatur kontrol dan pengatur waktu, Konka Oven Elektrik 13 L merupakan peralatan rumah tangga yang tepat untuk membantu proses memasak Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAKET ISI 2 - Mujigae Jajangmyeon - Mie Saus Kedelai Hitam Korea 330gr',
                'rating' => 5,
                'sold' => 750,
                'harga' => 80956,
                'jumlah' => 57,
                'description' => 'Bagi yang ingin makan Jajangmyeon di rumah dengan mudah, kini Mujigae punya Jajangmyeon
                by Mujigae yang mudah dimasak dan bisa disimpan di suhu ruang. Produk ini merupakan
                alternatif terbaik karena menggunakan bahan baku pilihan dan diproses menggunakan
                teknologi tinggi berupa proses sterilisasi untuk menghasilkan kualitas yang optimal dan tahan
                lama sehingga aman untuk dikonsumsi. Jajangmyeon by Mujigae memiliki perpaduan rasa yang
                tepat antara mie dan saus chunjang menghasilkan cita rasa unik khas Korea.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bolu Kukus Mawar - Bakery',
                'rating' => 5,
                'sold' => 248,
                'harga' => 2000,
                'jumlah' => 89,
                'description' => 'Dibuat setiap hari, berdasarkan pemesanan, jadi tidak ada ready stok. 😄❤.Kami selalu menginfokan kepada driver untuk tidak miring dan bawa hati hati, tetapi jika topping masih berantakan, mohon maaf hal ini di luar kendali kami 😊 Tapi dapat dipastikan bolu selalu dalam keadaan baik dan siap untuk langsung dinikmati.Untuk meminimalisir topping meses berantakan, dapat memilih options topping tanpa meses atau full meses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'breathe win simmering minyak aromaterapi',
                'rating' => 4,
                'sold' => 76,
                'harga' => 49900,
                'jumlah' => 98,
                'description' => 'Breath Simmering Aromaterapi ini merupakan minyak aromaterapi berkualitas yang dapat memberikan kesegaran pada ruangan Anda. Hadir dengan ragam pilihan aroma yang mampi membawa kesegaran nuansa alami ke dalam hunian anda. Tuangkan Cairan Simmering Aromaterapi ini ke atas tungku aromaterapi, lalu panaskan. Biarkan beberapa saat hingga aroma menyeruak ke seluruh ruangan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'COFFRET JAPAN Bed Sofa - Slim Edition',
                'rating' => 5,
                'sold' => 2,
                'harga' => 1429000,
                'jumlah' => 32,
                'description' => 'Coffret Bed Sofa adalah sofa multipurpose yang bisa digunakan untuk duduk santai atau berbaring dengan mengubahnya menjadi mode kasur yang bisa di expand up to 3 meter. Ini adalah produk import dari Jepang langsung yang memiliki garansi seumur hidu. Tunggu apalagi, Ayo beli Coffret Multipurpose Sofa Jepang ini sekarang!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
