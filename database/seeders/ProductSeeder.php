<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'title' => 'Pistoria',
                'category_id' => 1,
                'description' => 'Premium luxury watch for men.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

                Per in erat patrioque, ex sit idque tibique. Eos impetus recusabo argumentum ut. Sea esse ancillae inimicus ut. Affert vocibus ex vel, imperdiet voluptatibus est cu. Id laboramus theophrastus qui, an veniam maiorum referrentur vis. Sea te putant eripuit, eu vel stet omnes.

                Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
                'image' => 'images/male-watch-144648_1920.jpg',
                'price' => 5499.90,
                'discount' => '15'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 2
            ],
            [
                'title' => 'Segovia',
                'category_id' => 2,
                'description' => 'Fashionable watch for ladies.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

                Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
                'image' => 'images/male-watch-188780_1920.jpg',
                'price' => 1199.99,
                'discount' => '20'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 3
            ],
            [
                'title' => 'Gerunda',
                'category_id' => 3,
                'description' => 'Beautiful watch for children.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius.

                Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
                'image' => 'images/male-watch-188782_1920.jpg',
                'price' => 1500.00,
                'discount' => '0'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 4
            ],
            [
                'title' => 'Vesontio',
                'category_id' => 1,
                'description' => 'High quality watch for men.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu.

                Novum decore ex vix. Mei lorem utamur ne, an lorem vidisse delectus mea. Cu eam etiam nulla iudico. Officiis definitiones interpretaris ne qui, pri id atqui minim consetetur. Et cetero viderer usu, eu vis ferri congue evertitur, ea eam eros everti.',
                'image' => 'images/night-76880.jpg',
                'price' => 790.90,
                'discount' => '10'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 5
            ],
            [
                'title' => 'Lugdunum',
                'category_id' => 2,
                'description' => 'Stylish watch for ladies.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim.

                Per in erat patrioque, ex sit idque tibique. Eos impetus recusabo argumentum ut. Sea esse ancillae inimicus ut. Affert vocibus ex vel, imperdiet voluptatibus est cu. Id laboramus theophrastus qui, an veniam maiorum referrentur vis. Sea te putant eripuit, eu vel stet omnes.

                Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
                'image' => 'images/pocket-watch-560937_1280.jpg',
                'price' => 809.90,
                'discount' => '0'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 6
            ],
            [
                'title' => 'Bonna',
                'category_id' => 3,
                'description' => 'Custom watch for children.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

                Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
                'image' => 'images/pexels-photo-125779.jpg',
                'price' => 2349.90,
                'discount' => '30'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 7
            ],
            [
                'title' => 'Eboracum',
                'category_id' => 1,
                'description' => 'Limited edition watch for men.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius.

                Novum decore ex vix. Mei lorem utamur ne, an lorem vidisse delectus mea. Cu eam etiam nulla iudico. Officiis definitiones interpretaris ne qui, pri id atqui minim consetetur. Et cetero viderer usu, eu vis ferri congue evertitur, ea eam eros everti.',
                'image' => 'images/pexels-photo-225085.jpg',
                'price' => 5499.90,
                'discount' => '15'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 8
            ],
            [
                'title' => 'Olicana',
                'category_id' => 2,
                'description' => 'Pretty watch for ladies.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu.

                Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
                'image' => 'images/rolex-watch-time-luxury-364822.jpg',
                'price' => 3499.90,
                'discount' => '10'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 9
            ],
            [
                'title' => 'Coria',
                'category_id' => 3,
                'description' => 'Custom watch for children.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim.

                Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
                'image' => 'images/pocket-watch-2036304_1920.jpg',
                'price' => 1199.90,
                'discount' => '30'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 10
            ],
            [
                'title' => 'Lentia',
                'category_id' => 1,
                'description' => 'Handcrafted watch for men.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

                Per in erat patrioque, ex sit idque tibique. Eos impetus recusabo argumentum ut. Sea esse ancillae inimicus ut. Affert vocibus ex vel, imperdiet voluptatibus est cu. Id laboramus theophrastus qui, an veniam maiorum referrentur vis. Sea te putant eripuit, eu vel stet omnes.',
                'image' => 'images/pexels-photo-190819.jpg',
                'price' => 4499.90,
                'discount' => '25'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 11
            ],
            [
                'title' => 'Brixia',
                'category_id' => 2,
                'description' => 'Stylish watch for ladies.
                And also some
                Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu.

                Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.

                Novum decore ex vix. Mei lorem utamur ne, an lorem vidisse delectus mea. Cu eam etiam nulla iudico. Officiis definitiones interpretaris ne qui, pri id atqui minim consetetur. Et cetero viderer usu, eu vis ferri congue evertitur, ea eam eros everti.',
                'image' => 'images/pocket-watch-2061228_1920.jpg',
                'price' => 2000.00,
                'discount' => '10'
            ]
        );
        $product = Product::updateOrCreate(
            [
                'id' => 12
            ],
            [
                'title' => 'Lagentium',
                'category_id' => 3,
                'description' => 'High quality watch for children.
                And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

                Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
                'image' => 'images/watch-1955856_1920.jpg',
                'price' => 1890.00,
                'discount' => '0'
            ]
        );
    }
}
