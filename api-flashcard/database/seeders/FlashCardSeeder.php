<?php

namespace Database\Seeders;

use App\Models\Flashcard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlashCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flashcards = [
            ['term' => 'Apple', 'definition' => 'A round fruit with red or green skin.'],
            ['term' => 'Book', 'definition' => 'A set of written or printed pages bound together.'],
            ['term' => 'Car', 'definition' => 'A vehicle with four wheels used for transportation.'],
            ['term' => 'Dog', 'definition' => 'A domesticated animal known for loyalty.'],
            ['term' => 'Elephant', 'definition' => 'A large mammal with a trunk.'],
            ['term' => 'Flower', 'definition' => 'The colorful part of a plant that produces seeds.'],
            ['term' => 'Guitar', 'definition' => 'A musical instrument with strings.'],
            ['term' => 'House', 'definition' => 'A building for human habitation.'],
            ['term' => 'Island', 'definition' => 'Land surrounded by water.'],
            ['term' => 'Juice', 'definition' => 'A drink made from the extraction of fruit or vegetable liquids.'],
            ['term' => 'Key', 'definition' => 'A small metal object used to open locks.'],
            ['term' => 'Lamp', 'definition' => 'A device for giving light.'],
            ['term' => 'Mountain', 'definition' => 'A large natural elevation of the earth’s surface.'],
            ['term' => 'Notebook', 'definition' => 'A book of blank pages for writing.'],
            ['term' => 'Ocean', 'definition' => 'A vast body of salt water.'],
            ['term' => 'Pencil', 'definition' => 'An instrument for writing or drawing.'],
            ['term' => 'Queen', 'definition' => 'A female ruler of a country or kingdom.'],
            ['term' => 'River', 'definition' => 'A large natural stream of water.'],
            ['term' => 'Sun', 'definition' => 'The star at the center of our solar system.'],
            ['term' => 'Tree', 'definition' => 'A woody plant that grows tall.'],
            ['term' => 'Umbrella', 'definition' => 'A device used for protection against rain.'],
            ['term' => 'Violin', 'definition' => 'A stringed musical instrument.'],
            ['term' => 'Window', 'definition' => 'An opening in a wall to let in light and air.'],
            ['term' => 'Xylophone', 'definition' => 'A musical instrument made of wooden bars.'],
            ['term' => 'Yogurt', 'definition' => 'A food made from fermented milk.'],
            ['term' => 'Zebra', 'definition' => 'An African animal with black-and-white stripes.'],
            ['term' => 'Airplane', 'definition' => 'A powered flying vehicle.'],
            ['term' => 'Ball', 'definition' => 'A round object used in games and sports.'],
            ['term' => 'Cat', 'definition' => 'A small domesticated feline animal.'],
            ['term' => 'Desk', 'definition' => 'A piece of furniture with a flat surface for writing or working.'],
            ['term' => 'Egg', 'definition' => 'An oval object laid by birds, often used as food.'],
            ['term' => 'Fan', 'definition' => 'A device used to create airflow.'],
            ['term' => 'Glasses', 'definition' => 'Lenses worn to improve vision.'],
            ['term' => 'Hat', 'definition' => 'A head covering worn for various purposes.'],
            ['term' => 'Ink', 'definition' => 'A colored fluid used for writing.'],
            ['term' => 'Jacket', 'definition' => 'A garment worn on the upper body.'],
            ['term' => 'Kite', 'definition' => 'A light frame covered with cloth, flown in the wind.'],
            ['term' => 'Leaf', 'definition' => 'The flat green part of a plant.'],
            ['term' => 'Mirror', 'definition' => 'A reflective surface.'],
            ['term' => 'Nest', 'definition' => 'A structure built by birds to lay eggs.'],
            ['term' => 'Orange', 'definition' => 'A round citrus fruit.'],
            ['term' => 'Pillow', 'definition' => 'A cushion used to support the head.'],
            ['term' => 'Quilt', 'definition' => 'A warm bed covering made of padding.'],
            ['term' => 'Ring', 'definition' => 'A circular band worn as jewelry.'],
            ['term' => 'Shoe', 'definition' => 'Footwear worn for protection and style.'],
            ['term' => 'Table', 'definition' => 'A piece of furniture with a flat top.'],
            ['term' => 'Vase', 'definition' => 'A container used to hold flowers.'],
            ['term' => 'Watch', 'definition' => 'A small timepiece worn on the wrist.'],
            ['term' => 'Zoo', 'definition' => 'A place where animals are kept for public viewing.'],
        ];

        foreach ($flashcards as $card) {
            Flashcard::create($card);
        }
    }
}
