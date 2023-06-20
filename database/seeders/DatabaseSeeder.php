<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\tempat;
use App\Models\kategori;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'adminer@gmail.com',
            'password' => 'password123',
            'tipe' => 'admin',
            'telp' => '081296698098'
        ]);

        User::create([
            'name' => 'CS',
            'email' => 'servicerent@gmail.com',
            'password' => 'password123',
            'tipe' => 'cs',
            'telp' => '081296698098'
        ]);
        
        kategori::create([
            'name' => 'Konser'
        ]);
        kategori::create([
            'name' => 'Ballroom'
        ]);
        kategori::create([
            'name' => 'Musik'
        ]);
        kategori::create([
            'name' => 'Futsal'
        ]);
        kategori::create([
            'name' => 'Badminton'
        ]);
        kategori::create([
            'name' => 'Basket'
        ]);
        kategori::create([
            'name' => 'Golf'
        ]);
        kategori::create([
            'name' => 'Tennis'
        ]);
        


        tempat::create([
            'kategori_id' => '1',
            'name' => 'GBK Main Stadium',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Gelora, Tanah Abang, Central Jakarta, Indonesia',
            'harga' => 450000000,
            'rating' => 4,
            'img' => 'InformasiTempat-SUGBK1.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3419031479207!2d106.79960821535168!3d-6.218564762639981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sStadion%20Utama%20Gelora%20Bung%20Karno!5e0!3m2!1sid!2sid!4v1671943863578!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'Jakarta International Expo',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Jakarta, Indonesia',
            'harga' => 230000000,
            'rating' => 5,
            'img' => 'ArenaKonser-JIEXPO.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.882873535037!2d106.8430473153511!3d-6.146429961964022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f59269e62e3d%3A0xb3da35d58f3f6382!2sJkt%20International%20Expo%2C%20RW.10%2C%20Pademangan%20Tim.%2C%20Kec.%20Pademangan%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014410!5e0!3m2!1sid!2sid!4v1671943984471!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'Garuda Wisnu Kencana',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bali, Indonesia',
            'harga' => 200000000,
            'rating' => 5,
            'img' => 'ArenaKonser-GWK.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.3702995751737!2d115.16540991744385!3d-8.810422800000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244cf54e1dec7%3A0x1988663e064f5a51!2sGaruda%20Wisnu%20Kencana%20Cultural%20Park!5e0!3m2!1sid!2sid!4v1671983768603!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'ICE BSD',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Tangerang, Indonesia',
            'harga' => 100000000,
            'rating' => 5,
            'img' => 'ArenaKonser-ICEBSD.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.720459539617!2d106.63426301535236!3d-6.3004148634172354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb535f152305%3A0x34406ed8b098f478!2sIndonesia%20Convention%20Exhibition!5e0!3m2!1sid!2sid!4v1671944027960!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'Jakarta Convention Center',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Jakarta, Indonesia',
            'harga' => 330000000,
            'rating' => 5,
            'img' => 'ArenaKonser-JCC.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3739942466545!2d106.80501681744383!3d-6.2143089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6adbd77af01%3A0x23abed373d7987d2!2sBalai%20Sidang%20Jakarta%20Convention%20Center!5e0!3m2!1sid!2sid!4v1671944070397!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'Istora Senayan',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Jakarta, Indonesia',
            'harga' => 130000000,
            'rating' => 5,
            'img' => 'ArenaKonser-IstoraSenayan.png',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3293936573627!2d106.80347521535164!3d-6.220222962655579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d81ff223b%3A0x7f2d1c6db9fe661f!2sIstora%20Senayan!5e0!3m2!1sid!2sid!4v1671944129943!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'SICC',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bogor, Jawa Barat, Indonesia',
            'harga' => 230000000,
            'rating' => 5,
            'img' => 'ArenaKonser-SICC.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7038564087134!2d106.84591391535436!3d-6.559017565944668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c136703f9dd1%3A0xd5150fbc50c1ffa9!2sSentul%20International%20Convention%20Centre!5e0!3m2!1sid!2sid!4v1671944156672!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'Allianz Eco Park Ancol',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Jakarta Utara, Indonesia',
            'harga' => 420000000,
            'rating' => 5,
            'img' => 'ArenaKonser-AllianzEcoParkAncol.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.037075694509!2d106.83416731535107!3d-6.125713161771451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e1a241e3a9d%3A0x9ecf31ac76753a1a!2sAllianz%20Eco%20Park!5e0!3m2!1sid!2sid!4v1671944173628!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '1',
            'name' => 'The Kasablanka',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Jakarta Selatan, Indonesia',
            'harga' => 130000000,
            'rating' => 5,
            'img' => 'ArenaKonser-TheKasablanka.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3035622414986!2d106.84062491535171!3d-6.223645662687896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38cc147f145%3A0x3225ec9b7b7adc0c!2sThe%20Kasablanka!5e0!3m2!1sid!2sid!4v1671944192935!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);

        tempat::create([
            'kategori_id' => '2',
            'name' => 'Sudirman Grand',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000000,
            'rating' => 5,
            'img' => 'Ballroom-SudirmanGrandBallroom.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7748658546157!2d107.57510892841401!3d-6.917497453625294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e608cfa0c18d%3A0xbe7da28b948823b!2sSudirman%20Grand%20Ballroom!5e0!3m2!1sid!2sid!4v1671946106714!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Balai Sartika',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000000,
            'rating' => 5,
            'img' => 'Ballroom-BalaiSartika.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5639972954705!2d107.62308201535735!3d-6.942594769894201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xbc6627a16907037f!2sBalai%20Sartika!5e0!3m2!1sid!2sid!4v1671944276295!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Balai Asri Pusdai',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 180000000,
            'rating' => 5,
            'img' => 'Ballroom-BalaiAsriPusdai.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.919979003449!2d107.62399911744384!3d-6.900173500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c8ba9a1b1%3A0x1094b3160196a72!2sBale%20ASRI%20Pusdai!5e0!3m2!1sid!2sid!4v1671944301026!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Batununggal Indah',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 90000000,
            'rating' => 5,
            'img' => 'Ballroom-GrahaBatununggalIndah.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.39075187687!2d107.6238029737318!3d-6.963146868173833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85b9375a699%3A0x8c65c64f69b6e4dd!2sBatununggal%20Indah%20Estate!5e0!3m2!1sen!2sid!4v1672073983203!5m2!1sen!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'SESKOAD',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000000,
            'rating' => 4.5,
            'img' => 'Ballroom-SESKOAD.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31685.679875499995!2d107.59378817910155!3d-6.9252292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d798646619%3A0x4a43ac7e2ef86c4c!2sSESKOAD!5e0!3m2!1sid!2sid!4v1671944377100!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Graha Mekar Wangi',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 110000000,
            'rating' => 4.5,
            'img' => 'Ballroom-GrahaMekarWangi.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4712426350156!2d107.60031131535735!3d-6.953605770011072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8ebdd786acb%3A0xa5f1d5fcd0e3a728!2sGraha%20Mekar%20Wangi!5e0!3m2!1sid!2sid!4v1671944395733!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Grand Eastern',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 80000000,
            'rating' => 4.3,
            'img' => 'Ballroom-GrandEastern.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7936541169297!2d107.59612501744384!3d-6.915256900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63d906fcddd%3A0x77eeb8a9aca07e7!2sGrand%20Eastern!5e0!3m2!1sid!2sid!4v1671944459066!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Graha Emerald',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 130000000,
            'rating' => 4,
            'img' => 'Ballroom-GrahaEmerald.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.894608855711!2d107.64797781535698!3d-6.903205369477536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7941828b5c9%3A0xed3af66dc6b40116!2sGrha%20Emerald!5e0!3m2!1sid!2sid!4v1671944474326!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '2',
            'name' => 'Istana Muara',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000000,
            'rating' => 4.1,
            'img' => 'Ballroom-IstanaMuara.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.589030530872!2d107.59650151535737!3d-6.939620069862638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8bd5a61d7e5%3A0xa8aed91dd1bfb752!2sIstana%20Muara%20-%20Gedung%20Serbaguna!5e0!3m2!1sid!2sid!4v1671944493751!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Musik AR',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.6,
            'img' => 'StudioMusik-Ar.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31682.66069897454!2d107.60151317910154!3d-6.970033399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b41d97957f%3A0xb32f1bc9b13a8e29!2sAr%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671983868233!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Musik Awand',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.6,
            'img' => 'StudioMusik-Awand.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.356220228843!2d107.60571523955078!3d-6.998793799999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x511022d270b428f%3A0x6f17016e7625eca4!2sAwand%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944564278!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Rekaman DB',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 230000,
            'rating' => 4.6,
            'img' => 'StudioMusik-StudioRekamanDB.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4749668416976!2d107.62278881744385!3d-6.9531640000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85ed3b3ebc9%3A0x7e29a6e7d9ee3762!2sDB%20Digital%20Recording%20Studio!5e0!3m2!1sid!2sid!4v1671944590568!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Musik Licko',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.6,
            'img' => 'StudioMusik-Licko.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.331457259359!2d107.63349738636659!3d-6.940352919247533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e846b4037a9b%3A0x39d09964cdfda1a!2sLicko%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944610314!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Musik RAN',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 240000,
            'rating' => 4.6,
            'img' => 'StudioMusik-Ran.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3815358866004!2d107.60367021535752!3d-6.96423847012415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8e47708af73%3A0xdeb5afae5652b44a!2sRan%20Studio%20Musik!5e0!3m2!1sid!2sid!4v1671944628619!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Musik Xiphos',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 210000,
            'rating' => 4.6,
            'img' => 'StudioMusik-Xiphos.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.075327583441!2d107.59791758636757!3d-6.947958569505711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8665f6b9f95%3A0xaab0ab1d2eeb3a55!2sXiphos%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944645516!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Musik Dhouse',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.6,
            'img' => "StudioMusik-D'house.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63368.315848396545!2d107.57165289185231!3d-6.9478507022195775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9437b0aa855%3A0x7f9963c39f6eecb1!2sDhouse%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944660600!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => 'Rekaman Kurvans',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.6,
            'img' => 'StudioMusik-Kurvans.jpg',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.410747503641!2d107.6615588153575!3d-6.960777870087303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e96fe776fa2f%3A0xc7d3ec8bd58dc099!2sKurvans%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944674940!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '3',
            'name' => "Musik d'Freeze",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.6,
            'img' => "StudioMusik-d'Freeze.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4358510556667!2d107.66074731535754!3d-6.957802570055712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e82f4d49eca3%3A0xff24c1b24cd4272c!2sd&#39;Freeze%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944763183!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        
        tempat::create([
            'kategori_id' => '4',
            'name' => "Batununggal Indah Club",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 150000,
            'rating' => 4.4,
            'img' => "Olahraga-Futsal-BIC1.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3900500762747!2d107.62422731744384!3d-6.963229999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856a4e65fa9%3A0xd8cfdfde18d660dc!2sBatununggal%20Indah%20Club!5e0!3m2!1sid!2sid!4v1671944814049!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "Bisoc",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.4,
            'img' => "Olahraga-Futsal-Bisoc.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506941.6292608458!2d107.06745716562497!3d-6.95239149999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85c1c67b43f%3A0x1512113f9320962b!2sBisoc%20Futsal!5e0!3m2!1sid!2sid!4v1671944860030!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "Batununggal Futsal",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 75000,
            'rating' => 4.4,
            'img' => "Olahraga-Futsal-Batununggal.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4781126378707!2d107.6258308153573!3d-6.952790820002391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85c0836c879%3A0x9bcd6a8519eaef8b!2sBatu%20nunggal%20Futsal!5e0!3m2!1sid!2sid!4v1671944886245!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "Rajawali",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.4,
            'img' => "Olahraga-Futsal-Rajawali.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.250925935021!2d107.62896761744385!3d-6.979690499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9a56fd64807%3A0x54da306a9b41acc4!2sFutsal%20Rajawali!5e0!3m2!1sid!2sid!4v1671944932796!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "Maestro",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 110000,
            'rating' => 4.5,
            'img' => "Olahraga-Futsal-Maestro.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2919161267564!2d107.54937692841669!3d-6.97484475410405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eedefa63b3c9%3A0x585b26ebfaebce9!2sMaestro%20Futsal%20%26%20Basket!5e0!3m2!1sid!2sid!4v1671944952802!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "IFI",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.3,
            'img' => "Olahraga-Futsal-IFI.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2621304145237!2d107.62783241535759!3d-6.978366270274673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9af7a1c1c81%3A0x54142a9ffc9b3ac2!2sIFI%20Futsal!5e0!3m2!1sid!2sid!4v1671944969318!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "Hayu Futsal Baleendah",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.3,
            'img' => "Olahraga-Futsal-HayuFutsal.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0831350479225!2d107.62099181535783!3d-6.999491470500375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e980319c5c9b%3A0x42003ad36c30db00!2sHayu%20Futsal%20Baleendah!5e0!3m2!1sid!2sid!4v1671944997943!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "Sky Futsal",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 130000,
            'rating' => 4.3,
            'img' => "Olahraga-Futsal-SkyFutsal.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507595.81472159317!2d106.12453677343751!3d-6.317162999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5476ad6928f%3A0x394f40c7ced36018!2sSKY%20Futsal!5e0!3m2!1sen!2sid!4v1672074024249!5m2!1sen!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '4',
            'name' => "D'Gallery",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 90000,
            'rating' => 4.2,
            'img' => "Olahraga-Futsal-D'Gallery.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.060713368004!2d107.61349653955078!3d-6.978005999999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9a55fd57ce1%3A0x77aa3e12523c471b!2sD&#39;%20Gallery%20Futsal!5e0!3m2!1sid!2sid!4v1671945170361!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Sentosa",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 45000,
            'rating' => 4.6,
            'img' => "GorBadminton-Sentosa.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.240478170071!2d107.62679391535772!3d-6.980925070302031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e93dad86163d%3A0x53079de0aed4fa8f!2sGor%20Sentosa!5e0!3m2!1sid!2sid!4v1671945185192!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Spontan",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 50000,
            'rating' => 4.6,
            'img' => "GorBadminton-Spontan.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2934166743476!2d107.63192611744383!3d-6.974667299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b1e8a76b91%3A0x5c0791d5cc63de61!2sGOR%20SPONTAN!5e0!3m2!1sid!2sid!4v1671945210399!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor MSB",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 45000,
            'rating' => 4.6,
            'img' => "GorBadminton-MSB.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.338976534465!2d107.62806471535748!3d-6.969277270177792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9acd7874161%3A0x777f4c14a2bcee51!2sGor%20MSB!5e0!3m2!1sid!2sid!4v1671945231722!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Victory",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 40000,
            'rating' => 4.6,
            'img' => "GorBadminton-Victory.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1359299399587!2d107.63433941535773!3d-6.993267170433815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e996d921a90f%3A0x8a18b2860439f7b5!2sGOR%20Victory!5e0!3m2!1sid!2sid!4v1671945250774!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Cifut",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 50000,
            'rating' => 4.6,
            'img' => "GorBadminton-Cifut.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1870177970013!2d107.64568991535774!3d-6.9872388703694295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9c1cb5c54e7%3A0xe39db735c8c2d931!2sGor%20Cifut!5e0!3m2!1sid!2sid!4v1671945268801!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Mengger",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 40000,
            'rating' => 4.6,
            'img' => "GorBadminton-Mengger.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3645413273857!2d107.62557731535755!3d-6.96625097014556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9f88d01519b%3A0xa002adfd63e5ae25!2sGOR%20Bulutangkis%20Mengger!5e0!3m2!1sid!2sid!4v1671945292503!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Sigma",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 45000,
            'rating' => 4.6,
            'img' => "GorBadmintonSigma.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1423434338067!2d107.64071631535776!3d-6.992510670425749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ebf4e5c41b%3A0xee8f79ba360fd9c4!2sGOR%20SIGMA%20Badminton%20Arena!5e0!3m2!1sid!2sid!4v1671945314739!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Merkurius",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 40000,
            'rating' => 4.6,
            'img' => "GorBadminton-Merkurius.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63362.28994867281!2d107.60788554307048!3d-6.992418854080371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e96b8534b9ef%3A0x45303207a253a4ff!2sGOR%20Mercurius%20Badminton!5e0!3m2!1sid!2sid!4v1671945390021!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '5',
            'name' => "Gor Embun Permata",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 45000,
            'rating' => 4.6,
            'img' => "GorBadminton-GorEmbunPermata.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.313194438868!2d107.6506120153576!3d-6.9723279702103325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97442e96129%3A0xc6d76da5452084b7!2sGor%20bulutangkis%20Embun%20Permata!5e0!3m2!1sid!2sid!4v1671945409558!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        
        tempat::create([
            'kategori_id' => '6',
            'name' => "Batununggal Indah Club",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000,
            'rating' => 4.4,
            'img' => "Olahraga-Basket-BIC.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.390095071538!2d107.62422731535757!3d-6.963224670113355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856a4e65fa9%3A0xd8cfdfde18d660dc!2sBatununggal%20Indah%20Club!5e0!3m2!1sid!2sid!4v1671945449159!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Elite Arena",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 110000,
            'rating' => 4.8,
            'img' => "Olahraga-Basket-EliteArena.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.952542275869!2d107.63603851535697!3d-6.896280069404552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7a220f6a32b%3A0x6ede245d35df489d!2sElite%20Arena!5e0!3m2!1sid!2sid!4v1671945504430!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Beebucks",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000,
            'rating' => 4.7,
            'img' => "Olahraga-Basket-Beebucks.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6925322123648!2d107.62079721535714!3d-6.927307469732144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7822aa436ff%3A0x3702c42f89766474!2sBeebucks%20basketball%20futsal%20stadium!5e0!3m2!1sid!2sid!4v1671945521060!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Maestro",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.5,
            'img' => "Olahraga-Basket-Maestro.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2919161267564!2d107.54937692841663!3d-6.97484475410405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eedefa63b3c9%3A0x585b26ebfaebce9!2sMaestro%20Futsal%20%26%20Basket!5e0!3m2!1sid!2sid!4v1671945557360!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Gor Tunas Arena",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000,
            'rating' => 4.4,
            'img' => "Olahraga-Basket-BIC.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.74073003589!2d107.58841123488772!3d-6.921566400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e619769c0cbd%3A0x28296cc1892c3998!2sGor%20Tunas%20Arena!5e0!3m2!1sid!2sid!4v1671945575738!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Siliwangi",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 115000,
            'rating' => 4.7,
            'img' => "Olahraga-Basket-Siliwangi.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.33944695138!2d107.60049108320175!3d-6.910340242635062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xac64120b1085cd2e!2sSiliwangi%20Stadium!5e0!3m2!1sen!2sid!4v1672074049962!5m2!1sen!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Gor Alhayu",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 130000,
            'rating' => 4.5,
            'img' => "Olahraga-Basket-Alhayu.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.098607774708!2d107.62054681535784!3d-6.997667870480917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e94d53c9b4d7%3A0x5f6b72c6e08a932a!2sGOR%20ALHAYU%20Basketball!5e0!3m2!1sid!2sid!4v1671945609955!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Home Ground",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 100000,
            'rating' => 5,
            'img' => "Olahraga-Basket-HomeGround.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6996612071353!2d107.59535691744384!3d-6.926458599999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7773fcceefb%3A0x4241b1db7ccf05d6!2sHome%20Ground%20Basketball!5e0!3m2!1sid!2sid!4v1671945635680!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]); 
        tempat::create([
            'kategori_id' => '6',
            'name' => "Gor YPPI Trinitas",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 110000,
            'rating' => 4.7,
            'img' => "Olahraga-Basket-YPIITrinitas.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.773560704725!2d107.5895602153571!3d-6.917653069630049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e610b3821f51%3A0x856b10764757874!2sGOR%20YPII%20-%20Trinitas%20Bandung!5e0!3m2!1sid!2sid!4v1671945652796!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        
        tempat::create([
            'kategori_id' => '7',
            'name' => "Dago Heritage 1917",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1100000,
            'rating' => 4.6,
            'img' => "Olahraga-Golf-GolfHeritage.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1901685022094!2d107.62309161535666!3d-6.867801769105212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e71e870fc239%3A0x6e29d13b54a47c5a!2sDago%20Heritage%201917%20Golf%20Course!5e0!3m2!1sid!2sid!4v1671945667700!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Parahyangan",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1200000,
            'rating' => 4.6,
            'img' => "Olahraga-Golf-Parahyangan.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1003523878417!2d107.43928031535692!3d-6.878579569218381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68fb0e7a9aea43%3A0xe9d37c463356b1d0!2sParahyangan%20Golf!5e0!3m2!1sid!2sid!4v1671945687949!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Giri Gahana",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1000000,
            'rating' => 4.5,
            'img' => "Olahraga-Golf-GiriGahana.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8213215052383!2d107.76064031535705!3d-6.911956169569891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dca7e220f475%3A0xb46c9cf59f07a456!2sBandung%20Giri%20Gahana%20Golf%20%26%20Resort!5e0!3m2!1sid!2sid!4v1671945703791!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Mountain View",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1100000,
            'rating' => 4.5,
            'img' => "Olahraga-Golf-MountainView.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2306955457293!2d107.64603041535678!3d-6.862933069054155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73fc3af56cd%3A0x7ee32cb54b018a80!2sMountain%20View%20Golf%20Club!5e0!3m2!1sid!2sid!4v1671945754683!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Siliwangi",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1150000,
            'rating' => 4.5,
            'img' => "Olahraga-Golf-SiliwangiGolf.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8204080551163!2d107.61681731535707!3d-6.9120651695710436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6348804e093%3A0x94fae0a3b3974c7c!2sSiliwangi%20Golf!5e0!3m2!1sid!2sid!4v1671945770361!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Padang Golf Sulaiman",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1400000,
            'rating' => 4.2,
            'img' => "Olahraga-Golf-PadangGolfSulaiman.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.242563519623!2d107.58400831535779!3d-6.980678670299425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9314035783d%3A0x4780c09eb404d49c!2sPadang%20Golf%20Sulaiman!5e0!3m2!1sid!2sid!4v1671945836120!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Private Golf Range Champion",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1130000,
            'rating' => 4.4,
            'img' => "Olahraga-Golf-PrivateGolfRangeChampion.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5597978063784!2d107.62524771535647!3d-6.823268468639856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e0e0cacbb1d3%3A0xf87518bf9cc357a8!2sPrivate%20Golf%20Range%20Champion!5e0!3m2!1sid!2sid!4v1671945856447!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "Top Golf",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1000000,
            'rating' => 4.8,
            'img' => "Olahraga-Golf-TopGolf.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.821753667485!2d107.61651281744383!3d-6.9119046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e634587f8fc3%3A0x1aaa730d5336a5f9!2sTopgolf%20Siliwangi%20Bandung!5e0!3m2!1sid!2sid!4v1671945889483!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '7',
            'name' => "KPGA Golf Driving",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 1100000,
            'rating' => 4.5,
            'img' => "Olahraga-Golf-KPGAGolfDriving.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9981959295365!2d107.5737765348877!3d-6.890817799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e71c79b8b6b3%3A0x712e5b5c9f74acff!2sLOFT%20Cafe%20at%20KPGA%20Golf%20Driving!5e0!3m2!1sid!2sid!4v1671945936230!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        
        tempat::create([
            'kategori_id' => '8',
            'name' => "Sabuga ITB",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.5,
            'img' => "Olahraga-Tenis-SabugaITB.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0366092221584!2d107.60615441535691!3d-6.886218469298692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64557f442e3%3A0xc0e5915be0bedccb!2sSasana%20Budaya%20Ganesha%20(Sabuga)%20ITB!5e0!3m2!1sid!2sid!4v1671945968882!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '8',
            'name' => "Bikasoga",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 190000,
            'rating' => 4.4,
            'img' => "Olahraga-Tenis-Bikasoga.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.55530145567!2d107.62249091744384!3d-6.943627799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e861eecddf31%3A0xf82fde475caf7494!2sSport%20Center%20di%20Bandung%20-%20Bikasoga!5e0!3m2!1sid!2sid!4v1671946243556!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '8',
            'name' => "Taman Maluku",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 120000,
            'rating' => 4.5,
            'img' => "Olahraga-Tenis-TamanMaluku.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.843100964564!2d107.61267687373086!3d-6.909356767618362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63679ff3b3b%3A0xfe66cba7e5cbf1e4!2sTaman%20Maluku!5e0!3m2!1sen!2sid!4v1672074067611!5m2!1sen!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '8',
            'name' => "Singgasana sport",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 250000,
            'rating' => 4.4,
            'img' => "Olahraga-Tenis-SinggasanaSport.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4068451289795!2d107.59462871535754!3d-6.961240270092248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8dd5e5258bd%3A0x5309b909297374ae!2sSinggasana%20Sport%20%26%20Recreation%20Centre!5e0!3m2!1sid!2sid!4v1671946034203!5m2!1sid!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '8',
            'name' => "Siliwangi",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 200000,
            'rating' => 4.5,
            'img' => "Olahraga-Tenis-Siliwangi.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.834724962635!2d107.61637027373092!3d-6.910356567628656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xac64120b1085cd2e!2sSiliwangi%20Stadium!5e0!3m2!1sen!2sid!4v1672074092235!5m2!1sen!2sid',
            'telp' => '081233445566' 
        ]);
        tempat::create([
            'kategori_id' => '8',
            'name' => "Caringin",
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!',
            'alamat' => 'Bandung, Jawa Barat, Indonesia',
            'harga' => 150000,
            'rating' => 4.4,
            'img' => "Olahraga-Tenis-Caringin.jpg",
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2691459356233!2d107.6622322737301!3d-6.8583106670956315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7593f7166d1%3A0xa8c9913e4dd768cf!2sCaringin%20TILU!5e0!3m2!1sen!2sid!4v1672074120592!5m2!1sen!2sid',
            'telp' => '081233445566' 
        ]);
    }
}
