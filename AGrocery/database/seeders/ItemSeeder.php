<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'item_name' => 'Broccoli',
                'item_desc' => 'Broccoli is an edible green plant in the cabbage family whose large flowering head, stalk and small associated leaves are eaten as a vegetable. Broccoli is classified in the Italica cultivar group of the species Brassica oleracea.',
                'price' => '0.13'
            ],
            [
                'item_name' => 'Spinach',
                'item_desc' => 'Spinach is a leafy green flowering plant native to central and western Asia. It is of the order Caryophyllales, family Amaranthaceae, subfamily Chenopodioideae.',
                'price' => '1.26'
            ],
            [
                'item_name' => 'Asparagus',
                'item_desc' => 'Asparagus, or garden asparagus, folk name sparrow grass, scientific name Asparagus officinalis, is a perennial flowering plant species in the genus Asparagus.',
                'price' => '0.066'
            ],
            [
                'item_name' => 'Carrot',
                'item_desc' => 'The carrot is a root vegetable, typically orange in color, though purple, black, red, white, and yellow cultivars exist, all of which are domesticated forms of the wild carrot, Daucus carota, native to Europe and Southwestern Asia.',
                'price' => '0.20'
            ],
            [
                'item_name' => 'Chili Peppers',
                'item_desc' => 'Chili peppers, from Nahuatl chīlli, are varieties of the berry-fruit of plants from the genus Capsicum, which are members of the nightshade family Solanaceae, cultivated for their pungency.',
                'price' => '0.20'
            ],
            [
                'item_name' => 'Potato',
                'item_desc' => 'The potato is a starchy food, a tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas. The plant is a perennial in the nightshade family Solanaceae.',
                'price' => '1.06'
            ],
            [
                'item_name' => 'Onion',
                'item_desc' => 'An onion, also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium. The shallot is a botanical variety of the onion which was classified as a separate species until 2011.',
                'price' => '0.99'
            ],
            [
                'item_name' => 'Egg',
                'item_desc' => 'Humans and human ancestors have scavenged and eaten animal eggs for millions of years. Humans in Southeast Asia had domesticated chickens and harvested their eggs for food by 1500 BCE. The most widely consumed eggs are those of fowl, especially chickens.',
                'price' => '0.99'
            ],
            [
                'item_name' => 'Salt',
                'item_desc' => 'Salt is a mineral composed primarily of sodium chloride, a chemical compound belonging to the larger class of salts; salt in the form of a natural crystalline mineral is known as rock salt or halite. Salt is present in vast quantities in seawater.',
                'price' => '1.26'
            ],
            [
                'item_name' => 'Chicken',
                'item_desc' => 'The chicken (Gallus gallus domesticus) is a domesticated junglefowl species, with attributes of wild species such as the grey and the Ceylon junglefowl[1] that are originally from Southeastern Asia.',
                'price' => '0.20'
            ],
            [
                'item_name' => 'Parsley',
                'item_desc' => 'Parsley, or garden parsley is a species of flowering plant in the family Apiaceae that is native to the central and eastern Mediterranean region, but has been naturalized elsewhere in Europe, and is widely cultivated as a herb, and a vegetable.',
                'price' => '1.06'
            ],
            [
                'item_name' => 'Peanut',
                'item_desc' => 'The peanut, also known as the groundnut, goober, pindar or monkey nut, is a legume crop grown mainly for its edible seeds. It is widely grown in the tropics and subtropics, important to both small and large commercial producers.',
                'price' => '1.06'
            ],
            [
                'item_name' => 'Pickle',
                'item_desc' => 'Article of food that has been preserved in brine or in vinegar.',
                'price' => '1.06'
            ],
            [
                'item_name' => 'Lettuce',
                'item_desc' => 'Lettuce is an annual plant of the family Asteraceae. It is most often grown as a leaf vegetable, but sometimes for its stem and seeds.',
                'price' => '0.79'
            ],
            [
                'item_name' => 'Corn',
                'item_desc' => 'Maize also known as corn is a cereal grain first domesticated by indigenous peoples in southern Mexico about 10,000 years ago.',
                'price' => '0.20'
            ],
            [
                'item_name' => 'Mushroom',
                'item_desc' => 'A mushroom or toadstool is the fleshy, spore-bearing fruiting body of a fungus, typically produced above ground, on soil, or on its food source.',
                'price' => '0.86'
            ],
            [
                'item_name' => 'Tomato',
                'item_desc' => 'The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant.',
                'price' => '1.32'
            ],
            [
                'item_name' => 'Pea',
                'item_desc' => 'The pea is most commonly the small spherical seed or the seed-pod of the flowering plant species Pisum sativum.',
                'price' => '1.06'
            ],
            [
                'item_name' => 'Radish',
                'item_desc' => 'The radish is an edible root vegetable of the family Brassicaceae that was domesticated in Asia prior to Roman times.',
                'price' => '1.19'
            ],
            [
                'item_name' => 'Seaweed',
                'item_desc' => 'Seaweed, or macroalgae, refers to thousands of species of macroscopic, multicellular, marine algae. The term includes some types of Rhodophyta, Phaeophyta and Chlorophyta macroalgae.',
                'price' => '1.26'
            ],
        ]);
    }
}
