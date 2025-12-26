<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Animal;
use App\Models\Country;
use App\Models\Location;
use App\Models\Person;
use App\Models\Singable;
use App\Models\Day;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // A partridge in a pear tree!
        $day = \App\Models\Day::create(['name'=>'First']);
        $animal = \App\Models\Animal::create(['name' => 'A partidge']);
        $location = \App\Models\Location::create(['name' => 'in a pear tree']);
        return;
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($location)->save();
        // Two turtle doves,
        $day = \App\Models\Day::create(['name'=>'Second']);
        $animal = \App\Models\Animal::create(['name' => 'Two turtle doves']);
        $lyric1 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        // Three french hens,
        $day = \App\Models\Day::create(['name'=>'Third']);
        $location = \App\Models\Location::create(['name' => 'Three french']);
        $animal = \App\Models\Animal::create(['name' => 'hens']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($location)->save();
        $lyric2->singable()->associate($animal)->save();
        // Four calling birds,
        $day = \App\Models\Day::create(['name'=>'Fourth']);
        $animal = \App\Models\Animal::create(['name' => 'Four turtle doves']);
        $lyric1 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        // Five golden rings,
        $day = \App\Models\Day::create(['name'=>'Fifth']);
        $jewelry = \App\Models\Jewelry::create(['name' => 'FIVE GOLDEN RINGS']);
        $lyric1 = $day->lyrics()->make();
        $lyric1->singable()->associate($jewelry)->save();
        // Six geese a-laying,
        $day = \App\Models\Day::create(['name'=>'Sixth']);
        $animal = \App\Models\Animal::create(['name' => 'Six geese']);
        $activity = \App\Models\Activity::create(['name' => 'a-laying']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($activity)->save();
        // Seven swans a-swimming,
        $day = \App\Models\Day::create(['name'=>'Seventh']);
        $animal = \App\Models\Animal::create(['name' => 'Seven swans']);
        $activity = \App\Models\Activity::create(['name' => 'a-swimming']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($activity)->save();
        // Eight maids a-milking,
        $day = \App\Models\Day::create(['name'=>'Eighth']);
        $animal = \App\Models\Animal::create(['name' => 'Eight maids']);
        $activity = \App\Models\Activity::create(['name' => 'a-milking']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($activity)->save();
        // Nine ladies dancing,
        $day = \App\Models\Day::create(['name'=>'Ninth']);
        $person = \App\Models\Person::create(['name' => 'Nine ladies']);
        $activity = \App\Models\Activity::create(['name' => 'dancing']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
        // Ten lords a-leaping,
        $day = \App\Models\Day::create(['name'=>'Tenth']);
        $person = \App\Models\Person::create(['name' => 'Ten lords']);
        $activity = \App\Models\Activity::create(['name' => 'a-leaping']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
        // Eleven pipers piping,
        $day = \App\Models\Day::create(['name'=>'Eleventh']);
        $person = \App\Models\Person::create(['name' => 'Eleven pipers']);
        $activity = \App\Models\Activity::create(['name' => 'piping']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
        // Twelve drummers drumming,
        $day = \App\Models\Day::create(['name'=>'Twelveth']);
        $person = \App\Models\Person::create(['name' => 'Twelve drummers']);
        $activity = \App\Models\Activity::create(['name' => 'drumming']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
    }
}
