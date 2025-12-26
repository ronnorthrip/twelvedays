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
        $animal = \App\Models\Animal::create(['name' => 'A hasOne']);
        $location = \App\Models\Location::create(['name' => 'in a model, see']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($location)->save();
        // Two turtle doves,
        $day = \App\Models\Day::create(['name'=>'Second']);
        $animal = \App\Models\Animal::create(['name' => 'Two hasMany functions']);
        $lyric1 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        // Three french hens,
        $day = \App\Models\Day::create(['name'=>'Third']);
        $location = \App\Models\Location::create(['name' => 'Three belongsTo']);
        $animal = \App\Models\Animal::create(['name' => 'parent']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($location)->save();
        $lyric2->singable()->associate($animal)->save();
        // Four calling birds,
        $day = \App\Models\Day::create(['name'=>'Fourth']);
        $animal = \App\Models\Animal::create(['name' => 'Four inverse rels']);
        $lyric1 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        // Five golden rings,
        $day = \App\Models\Day::create(['name'=>'Fifth']);
        $jewelry = \App\Models\Jewelry::create(['name' => 'FIVE FRESH MIGRATIONS']);
        $lyric1 = $day->lyrics()->make();
        $lyric1->singable()->associate($jewelry)->save();
        // Six geese a-laying,
        $day = \App\Models\Day::create(['name'=>'Sixth']);
        $animal = \App\Models\Animal::create(['name' => 'Six through']);
        $activity = \App\Models\Activity::create(['name' => 'related']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($activity)->save();
        // Seven swans a-swimming,
        $day = \App\Models\Day::create(['name'=>'Seventh']);
        $animal = \App\Models\Animal::create(['name' => 'Seven pivot']);
        $activity = \App\Models\Activity::create(['name' => 'values']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($activity)->save();
        // Eight maids a-milking,
        $day = \App\Models\Day::create(['name'=>'Eighth']);
        $animal = \App\Models\Animal::create(['name' => 'Eight scoped']);
        $activity = \App\Models\Activity::create(['name' => 'relations']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($animal)->save();
        $lyric2->singable()->associate($activity)->save();
        // Nine ladies dancing,
        $day = \App\Models\Day::create(['name'=>'Ninth']);
        $person = \App\Models\Person::create(['name' => 'Nine ids']);
        $activity = \App\Models\Activity::create(['name' => 'counting']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
        // Ten lords a-leaping,
        $day = \App\Models\Day::create(['name'=>'Tenth']);
        $person = \App\Models\Person::create(['name' => 'Ten custom']);
        $activity = \App\Models\Activity::create(['name' => 'polys']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
        // Eleven pipers piping,
        $day = \App\Models\Day::create(['name'=>'Eleventh']);
        $person = \App\Models\Person::create(['name' => 'Eleven eager']);
        $activity = \App\Models\Activity::create(['name' => 'loads']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
        // Twelve drummers drumming,
        $day = \App\Models\Day::create(['name'=>'Twelveth']);
        $person = \App\Models\Person::create(['name' => 'Twelve Taylors']);
        $activity = \App\Models\Activity::create(['name' => 'drumming']);
        $lyric1 = $day->lyrics()->make();
        $lyric2 = $day->lyrics()->make();
        $lyric1->singable()->associate($person)->save();
        $lyric2->singable()->associate($activity)->save();
    }
}
