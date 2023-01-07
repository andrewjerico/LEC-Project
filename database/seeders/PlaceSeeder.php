<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name' => 'Mt.Bromo',
            'description' => 'Soaring over 2300 meters above sea level, Mount Bromo is the only active volcano inside Javas spectacular Tengger Caldera national park.',
            'location' => 'Probolinggo, East Java',
            'province_id' => 13,
            'price' => 30000,
            'image' => 'place-image/bromo.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Borobudur Temple',
            'description' => 'Borobudur Temple Compounds This famous Buddhist temple, dating from the 8th and 9th centuries, is located in central Java. It was built in three tiers: a pyramidal base with five concentric square terraces, the trunk of a cone with three circular platforms and, at the top, a monumental stupa. The walls and balustrades are decorated with fine low reliefs, covering a total surface area of 2,500 m2. Around the circular platforms are 72 openwork stupas, each containing a statue of the Buddha.',
            'location' => 'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah',
            'province_id' => 12,
            'price' => 50000,
            'image' => 'place-image/borobudur.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Prambanan Temples',
            'description' => 'These ancient masterpieces of Hindu architecture are adorned with bas-reliefs depicting the famous Ramayana story.',
            'location' => 'Jl. Raya Solo - Yogyakarta No.16, Kranggan, Bokoharjo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
            'province_id' => 15,
            'price' => 50000,
            'image' => 'place-image/prambanan.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Lake Toba',
            'description' => 'Comprising over 1,145 kilometers square area and a depth of 450 meters, Lake Toba is actually more like a sea than a lake. However, due to the fact that it was an ancient crater that was created from a volcanic eruption thousands of years ago, it was then considered as the largest lake in Southeast Asia and one of the deepest lakes in the world. In the middle of the lake, there is Samosir Island, an island where Tomok and Simanindo ethnic groups reside.Â ',
            'location' => 'North Sumatra',
            'province_id' => 6,
            'price' => 25000,
            'image' => 'place-image/toba.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Komodo National Park',
            'description' => 'Komodo National Park, a UNESCO World Heritage site, encompasses three main islands and a number of smaller ones, as well as the surrounding marine areas. The waters off these islands are some of the richest and most diverse in the world.',
            'location' => 'Komodo island, East Nusa Tenggara',
            'province_id' => 23,
            'price' => 150000,
            'image' => 'place-image/komodo.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Way Kambas National Park',
            'description' => 'Way Kambas National Park is a national park covering 1,300 square kilometres in Lampung province, southern Sumatra, Indonesia. It consists of swamp forest and lowland rain forest, mostly of secondary growth as result of extensive logging in the 1960s and 1970s.',
            'location' => 'East Lampung Regency, Lampung',
            'province_id' => 5,
            'price' => 225000,
            'image' => 'place-image/waykambas.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Parai Tenggiri Beach',
            'description' => 'This beach is very ideal for having swimming, sun bathing and relax. Parai Tenggiri beach has the complete facilities in Bangka Island. There are luxurious hotels and water sport facilities. The tourists will enjoy this beach with the local fishermen who always spend their days by looking for fishes in the sea. The calmness and fresh sea wind will greet the visitor when they arrive there. This welcomed course make the tourists feel comfortable to stay here.',
            'location' => 'Sungailiat, Bangka Belitung Islands',
            'province_id' => 2,
            'price' => 25000,
            'image' => 'place-image/parai.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Mount Rinjani',
            'description' => 'Mount Rinjani is an active volcano on the Indonesian island of Lombok. With an elevation of 3,726m / 12,224ft Mt Rinjani is one of South East Asia highest peaks, attracting hikers and alpinists from around the world.',
            'location' => 'Regency of North Lombok',
            'province_id' => 24,
            'price' => 250000,
            'image' => 'place-image/rinjani.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Bunaken National Marine Park',
            'description' => 'Bunaken is an island, formerly part of Manado bay, is norther part of Sulawesi province, Indonesia. The visitors can reach Bunaken by speed boat abour 30 minutes from Manado sea port. Around the Bunaken Island, there is Bunaken Sea Garden which is part of Bunaken National Park.',
            'location' => 'North of the island of Sulawesi',
            'province_id' => 26,
            'price' => 150000,
            'image' => 'place-image/bunaken.jpg',
            'popularity' => 0
        ]);

        Place::create([
            'name' => 'Atlas Beach Club',
            'description' => 'Atlas Beach Fest is situated on Berawa Beach, Bali. This most prominent beach club in Southeast Asia is currently under the spotlight as the project highlights Indonesia one-stop remarkable lifestyle centre of fun, entertainment, and leisure with a festive, tropical cosmopolitan style.',
            'location' => 'Jl. Pantai Berawa No.88, Tibubeneng, Kec. Kuta Utara, Kabupaten Badung, Bali',
            'province_id' => 22,
            'price' => 150000,
            'image' => 'place-image/atlas.jpg',
            'popularity' => 0
        ]);

        // Place::create([
        //     'name' => ,
        //     'description' =>,
        //     'location' => ,
        //     'province' => ,
        //     'price' =>,
        //     'image' => 'place-image/'
        // ]);

        // Place::create([
        //     'name' => ,
        //     'description' =>,
        //     'location' => ,
        //     'province' => ,
        //     'price' =>,
        //     'image' => 'place-image/'
        // ]);


    }
}
