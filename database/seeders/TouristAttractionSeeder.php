<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TouristAttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourist_attractions')->insert([
            [
                "name" => "PURA BESAKIH",
                "image" => "https://tempatwisatadibali.info/wp-content/uploads/2018/02/Pura-Agung-Besakih-Karangasem-Bali-1.jpg",
                "description_id" => "Pura Besakih adalah sebuah komplek pura yang terletak di Desa Besakih, Kecamatan Rendang, Kabupaten Karangasem, Bali, Indonesia. Komplek Pura Besakih terdiri dari 1 Pura Pusat (Pura Penataran Agung Besakih) dan 18 Pura Pendamping (1 Pura Basukian dan 17 Pura Lainnya). Di Pura Basukian, di areal inilah pertama kalinya tempat diterimanya wahyu Tuhan oleh Hyang Rsi Markendya, cikal bakal Agama Hindu Dharma sekarang di Bali, sebagai pusatnya. Pura Besakih merupakan pusat kegiatan dari seluruh Pura yang ada di Bali. Di antara semua pura-pura yang termasuk dalam kompleks Pura Besakih, Pura Penataran Agung adalah pura yang terbesar, terbanyak bangunan-bangunan pelinggihnya, terbanyak jenis upakaranya dan merupakan pusat dan semua pura yang ada di komplek Pura Besakih. Di Pura Penataran Agung terdapat 3 pelinggih utama yang disebut Padma Tiga simbol stana dari Tri Purusha yaitu Siwa, Sada Siwa dan Parama Siwa. Tri Purusha adalah tiga tingkat Kesadaran Rohani.",
                "description_en" => "Pura Besakih is a temple complex located in Besakih Village, Rendang District, Karangasem Regency, Bali, Indonesia. The Besakih Temple complex consists of 1 Central Temple (Besakih Penataran Agung Temple) and 18 Companion Temples (1 Basukian Temple and 17 Other Temples). In Basukian Temple, this is the first time the place where God's revelation was received by Hyang Rsi Markendya, the forerunner of the Hindu Dharma Religion now in Bali, as the center. Besakih Temple is the center of activity for all temples in Bali. Among all the temples included in the Besakih Temple complex, Penataran Agung Temple is the largest temple, has the most pelinggih buildings, has the most types of ceremonies and is the center of all the temples in the Besakih Temple complex. At Penataran Agung Temple there are 3 main pelinggih called Padma. The three stana symbols of the Tri Purusha are Shiva, Sada Shiva and Parama Shiva. Tri Purusha are the three levels of Spiritual Consciousness.",
                "location" => "Besakih, Rendang, Karangasem, Bali, Indonesia",
                "price_estimate" => "Rp30.000,00 - Rp60.000,00",
                "time" => "08:00 - 18:00"
            ],
            [
                "name" => "Bukit Jambul ",
                "image" => "https://www.itrip.id/wp-content/uploads/2022/04/Bukit-Jambul-Karangasem.jpg",
                "description_id" => "Bukit Jambul merupakan objek wisata alam di Karangasem yang menawarkan panorama yang sangat menakjubkan. Tempat ini menjadi surga bagi wisatawan yang ingin menikmati pemandangan hijau dan segar. Di bukit inilah, Anda bisa melihat lanskap menawan dari perbukitan, lembah, terasering sawah, hingga gugusan pulau dari kejauhan.",
                "description_en" => "Bukit Jambul is a natural tourist attraction in Karangasem which offers an amazing panorama. This place is a paradise for tourists who want to enjoy green and fresh scenery. It is on this hill that you can see the charming landscape of hills, valleys, rice terraces and clusters of islands from a distance.",
                "location" => "Desa Pesaban, Desa Nongan, Kecamatan Rendang, Bali.",
                "price_estimate" => "Gratis",
                "time" => "24 Jam"
            ],
            [
                "name" => "Taman Ujung",
                "image" => "https://thumb.intipseleb.com/media/frontend/thumbs3/2022/10/05/633c69cfbda99-taman-ujung_663_372.JPEG",
                "description_id" => "Taman Ujung Karangasem dibangun oleh raja Karangasem I Gusti Bagus Jelantik, yang bergelar Anak Agung Agung Anglurah Ketut Karangasem. Pada awalnya luasnya hampir 400 hektare, tetapi sekarang hanya tinggal sekitar 10 hektare. Kebanyakan tanah tersebut sudah dibagikan kepada masyarakat pada masa land reform. Taman ini adalah milik pribadi keluarga Puri Karangasem. Namun pengunjung umum diperbolehkan mengunjunginya.",
                "description_en" => "Taman Ujung Karangasem was built by the king of Karangasem I Gusti Bagus Jelantik, who had the title Anak Agung Agung Anglurah Ketut Karangasem. At first it was almost 400 hectares in area, but now only about 10 hectares are left. Most of the land has been distributed to the community during the land reform period. This park is privately owned by the Puri Karangasem family. But general visitors are allowed to visit it.",
                "location" => "Banjar Ujung, Desa Tumbu kabupaten Karangasem Bali",
                "price_estimate" => "Rp25.000,00 - Rp75.000,00",
                "time" => "07:00 - 19:00"
            ],
            [
                "name" => "Candidasa",
                "image" => "https://a.cdn-hotels.com/gdcs/production161/d644/bf88dd30-dc5c-4e05-9465-1b0e9532012d.jpg",
                "description_id" => "Candi Dasa, atau sering disebut Candidasa adalah kota tepi pantai di pantai timur Bali yang terletak di tepi laguna air tawar, bernama Candi Dasa Lagoon. Kota ini berpusat di sekitar Jalan Raya Candida, di mana sejumlah hotel, restoran, dan toko berjejer di jalan utama.",
                "description_en" => "Candi Dasa, or often called Candidasa is a seaside town on the east coast of Bali which is located on the edge of a fresh water lagoon, named Candi Dasa Lagoon. The town is centered around the Candida Highway, where a number of hotels, restaurants and shops line the main street.",
                "location" => "Nyuh Tebel, Kecamatan Manggis, Kabupaten Karangasem, Bali",
                "price_estimate" => "Rp2.000,00 - Rp.5.000,00 (Biaya Parkir)",
                "time" => "24 Jam",
            ],
            [
                "name" => "Tirta Gangga",
                "image" => "https://travelspromo.com/wp-content/uploads/2019/07/Taman-Istana-Air-Tirta-Gangga-Karangasem-simonebusi88-e1564112233859.jpg",
                "description_id" => "Tirta Gangga secara harfiah berarti air dari Sungai Gangga yang merupakan penghormatan kepada masyarakat Hindu Bali. Nama ini mengacu pada istana air yang dibangun pada tahun 1948 oleh Raja Karangasem, Anak Agung Anglurah Ketut Karangasem Agung. Namun, nama ini juga digunakan untuk merujuk pada wilayah yang meliputi istana air beserta daerah pedesaan yang subur di sekitarnya. Istana Air Tirta Gangga berupa labirin kolam dan air mancur yang dikelilingi oleh taman yang rimbun serta patung-patung. Kompleks seluas satu hektar ini dibangun pada tahun 1946 oleh almarhum Raja Karangasem tetapi hampir hancur seluruhnya akibat letusan Gunung Agung pada tahun 1963.[1] Kemudian dibangun kembali dan dipulihkan. Daerah di sekitar Tirta Gangga terkenal dengan teras-teras sawahnya.",
                "description_en" => "Tirta Gangga literally means water from the Ganges River which is a tribute to the Balinese Hindu community. This name refers to the water palace built in 1948 by the King of Karangasem, Anak Agung Anglurah Ketut Karangasem Agung. However, this name is also used to refer to the area that includes the water palace and the surrounding fertile countryside. The Tirta Gangga Water Palace is a maze of pools and fountains surrounded by lush gardens and statues. The one hectare complex was built in 1946 by the late Raja Karangasem but was almost completely destroyed by the eruption of Mount Agung in 1963.[1] Then it was rebuilt and restored. The area around Tirta Gangga is famous for its rice terraces.",
                "location" => "Jalan Raya Abang Desa Adat Jl. Raya Tirta Gangga, Ababi, Kecamatan Abang, Kabupaten Karangasem, Bali",
                "price_estimate" => "Rp25.000,00",
                "time" => "08:00 - 17:00",
            ],
            [
                "name" => "TULAMBEN ",
                "image" => "https://www.befreetour.com/img/attraction/tulamben%C2%A020191021142350.jpg",
                "description_id" => "Desa Tulamben merupakan salah satu dari desa yang terletak di Kecamatan Kubu, Kabupaten Karangasem, Provinsi Bali, Indonesia.[4] Nama Tulamben sendiri berasal dari kata batulambih, yang berarti \"banyak batu\", merujuk pada letusan Gunung Agung yang mempengaruhi bebatuan yang ada di tempat ini dari waktu ke waktu. Nama ini berubah menjadi Batulamben, dan akhirnya Tulamben. Desa ini adalah salah satu tempat rekreasi penyelaman yang terkenal di Bali, terutama di sekitar lokasi kapal karam USAT Liberty (sebuah kapal angkut tentara angkatan darat Amerika Serikat yang tenggelam setelah terkena torpedo dari salah satu kapal selam Jepang pada tahun 1942).",
                "description_en" => "Desa Tulamben is one of the villages located in Kubu District, Karangasem Regency, Bali Province, Indonesia.[4] The name Tulamben itself comes from the word batulambih, which means \"many stones\", referring to the eruption of Mount Agung which affected the rocks in this place from time to time. This name changed to Batulamben, and finally Tulamben. This village is one of the famous diving spots in Bali, especially around the location of the USAT Liberty shipwreck (a US army transport ship that sank after being hit by a torpedo from a Japanese submarine in 1942).",
                "location" => "Kecamatan Kubu, Kabupaten Karangasem, Provinsi Bali, Indonesia",
                "price_estimate" => "Rp2.000,00 - Rp.5.000,00 (Biaya Parkir)",
                "time" => "24 Jam",
            ],
            [
                "name" => "Pantai  Amed",
                "image" => "https://mytrip123.com/wp-content/uploads/2018/10/pantai-amed-1.jpg",
                "description_id" => "Amed terletak di salah satu teluk di timur laut Pulau Bali, tepatnya di Kec. Abang, Kab. Karangasem. Wilayah ini dulunya terkenal dengan garam lautnya yang diprodukis secara tradisional dan terkenal karena keindahan alamnya. Saat ini Amed juga dikenal sebagai salah satu tujuan wisata bawah air di Pulau Bali. Salah satu tempat rekreasi penyelaman di Amed bernama Jemeluk. Para penyelam menggunakan kapal tradisional Jukung untuk mencapainya. Disana mereka bisa melihat penyu, hiu karang, dan ikan pari (tergantung dari kedalaman penyelaman) disamping pemandangan terumbu karang yang sangat indah. Sekitar 10 meter dari salah satu bibir pantai Amed terdapat kerangka kapal patroli Jepang pada zaman Perang Dunia II yang karam. Lokasi ini juga dijadikan salah satu daerah wisata selam, seperti yang terdapat di Tulamben.",
                "description_en" => "Amed is located in one of the bays in the northeast of Bali Island, precisely in Kec. Brother, Kab. Karangasem. This region was formerly famous for its traditionally produced sea salt and is famed for its natural beauty. Currently Amed is also known as one of the underwater tourist destinations on the island of Bali. One of the diving spots in Amed is called Jemeluk. Divers use traditional Jukung boats to reach it. There they can see turtles, reef sharks, and stingrays (depending on the depth of the dive) in addition to a very beautiful view of the coral reefs. About 10 meters from one of Amed's shorelines, there is the wreck of a Japanese patrol boat during World War II. This location is also used as a diving tourism area, such as the one in Tulamben.",
                "location" => "Kecamatan Abang, Kabupaten Karangasem.",
                "price_estimate" => "Rp2.000,00 - Rp.5.000,00 (Biaya Parkir)",
                "time" => "24 Jam",
            ],
            [
                "name" => "Pura Lempuyangan",
                "image" => "https://www.ayobali.net/wp-content/uploads/2020/11/Pura-Lempuyang-Luhur.jpg",
                "description_id" => "Pura Penataran Agung Lempuyang adalah sebuah pura yang terletak di lereng Gunung Lempuyang di Karangasem, Bali. Pura Penataran Agung Lempuyang dianggap sebagai bagian dari kompleks pura di sekitar Gunung Lempuyang, salah satu pura yang sangat dihormati di Bali. Pura-pura di Gunung Lempuyang, yang diwakili oleh pura tertinggi di puncak Gunung Lempuyang, Pura Lempuyang Luhur, merupakan salah satu Sad Kahyangan Jagad, atau \"enam tempat suci dunia\", enam tempat sembahyang paling suci di Bali.",
                "description_en" => "Pura Penataran Agung Lempuyang is a temple located on the slopes of Mount Lempuyang in Karangasem, Bali. Penataran Agung Lempuyang Temple is considered as part of the temple complex around Mount Lempuyang, one of the most revered temples in Bali. The temples on Mount Lempuyang, represented by the highest temple on the peak of Mount Lempuyang, Pura Lempuyang Luhur, is one of the Sad Kahyangan Jagad, or \"six holy places of the world\", the six holiest places of worship in Bali.",
                "location" => "Desa Tista, Kecamatan Abang, Karangasem, Bali.",
                "price_estimate" => "Rp50.000,00",
                "time" => "09:00 - 18:00",
            ],
            [
                "name" => "PURA GOA LAWAH",
                "image" => "https://nangunsatkerthilokabali.com/wp-content/uploads/2021/10/pura-goa-lawah.jpg",
                "description_id" => "Pura Goa Lawah merupakan sebuah pura yang terletak di Desa Pasinggahan, Kecamatan Dawan, Kabupaten Klungkung, Bali, yang berjarak sekitar 40 km dari ibu kota Bali, Denpasar. Pura Goa Lawah dikenal masyarakat karena adanya sebuah gua pada bagian utama pura ini, yang didalamnya terdapat sekumpulan kelelawar. Pura ini juga menjadi titik fokus Perang Kusamba, sebuah perang antara Tentara Kerajaan Hindia Belanda yang dipimpin oleh Mayor Jenderal Andreas Victor Michiels melawan rakyat Klungkung yang dipimpin oleh Dewa Agung Istri Kanya.",
                "description_en" => "Pura Goa Lawah is a temple located in Pasinggahan Village, Dawan District, Klungkung Regency, Bali, which is about 40 km from the capital city of Bali, Denpasar. Goa Lawah Temple is known to the public because of the existence of a cave in the main part of this temple, which contains a collection of bats. This temple is also the focal point of the Kusamba War, a war between the Royal Dutch East Indies Army led by Major General Andreas Victor Michiels against the people of Klungkung led by Dewa Agung Istri Kanya.",
                "location" => "Desa Pasinggahan, Kecamatan Dawan, Kabupaten Klungkung, Bali.",
                "price_estimate" => "Rp15.000,00 - Rp20.000,00",
                "time" => "24 Jam",
            ],
            [
                "name" => "BALI ZOO PARK",
                "image" => "https://img.okezone.com/content/2021/07/29/406/2447640/bali-zoo-tutup-sementara-selama-ppkm-level-4-zY7CD5uxA9.JPG",
                "description_id" => "Daya tarik utama dari kebun binatang Zoo Park terletak pada tata letak dan desain taman dengan jalur tempat jalan pengunjung yang tertata dan terarah. Dengan jalur pengunjung yang tertata sangat bagus, membuat pengujung yang pertama kali liburan ke Zoo Park Singapadu, tidak akan kebingungan. Karena saya seorang bapak jadi sangat tahu betul keinginan anak-anak. Terkadang tidak semua anak menyukai liburan ke kebun binatang, pinginnya hanya main ke Mall seperti anak-anak saya. Zoo Park Gianyar sangat jeli akan hal ini, maka fasilitas kebun binatang juga di lengkapi dengan wahana air, yang membuat semua anak-anak akan suka. Perpaduan antara kebun binatang dan wahana air, salah satu daya tarik utama untuk liburan ke kebun binatang Bali bersama anak-anak Anda.",
                "description_en" => "The main attraction of the Zoo Park zoo lies in the layout and design of the park with an orderly and directed path for visitors. With a well-organized visitor route, visitors who are on vacation to Singapadu Zoo for the first time will not be confused. Because I am a father, I really know what my children want. Sometimes not all children like going to the zoo, they just want to go to the mall like my kids. Zoo Park Gianyar is very observant about this, so the zoo facilities are also equipped with water rides, which all children will love. A combination of zoo and water rides, one of the main attractions for a vacation to the Bali zoo with your children.",
                "location" => "Jl. Raya Singapadu, Singapadu, Kecamatan Sukawati, Kabupaten Gianyar, Bali",
                "price_estimate" => "Rp100.000,00 - Rp140.000,00",
                "time" => "09:00 - 17:00",
            ]
        ]);
    }
}
