<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use App\Models\Promo;
use App\Models\Prize;
use App\Models\Entry;
use App\Models\Validation;
use App\Models\RafflePick;
use App\Models\Faq;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create users first
        User::factory()->count(10)->create();

        // Seed admins first
        Admin::factory()->count(5)->create();

        // Create promos
        Promo::factory()->count(5)->create();

        // Create entries, which require existing users and promos
        Entry::factory()->count(20)->create();

        // Create prizes, which require existing promos
        Prize::factory()->count(10)->create();

        // Create validations, which require existing entries and admins
        Validation::factory()->count(15)->create();

        // Create raffle picks, which require existing entries and promos
        RafflePick::factory()->count(10)->create();

        // Create FAQs, which require existing promos
        Faq::factory()->count(5)->create();
//        // Create users
//        $users = User::factory()->count(10)->create();
//
//        // Create admins
//        $admins = Admin::factory()->count(5)->create();
//
//        // Create promos and associate prizes and FAQs
//        $promos = Promo::factory()->count(3)->create()->each(function ($promo) {
//            Prize::factory()->count(2)->create(['promo_id' => $promo->id]);
//            Faq::factory()->count(3)->create(['promo_id' => $promo->id]);
//        });
//
//        // Create entries and associate with existing users and promos
//        $entries = Entry::factory()->count(10)->create()->each(function ($entry) use ($promos, $users) {
//            $entry->promo_id = $promos->random()->id;
//            $entry->user_id = $users->random()->id;
//            $entry->save();
//        });
//
//        // Create validations and associate with existing entries and admins
//        Validation::factory()->count(10)->create()->each(function ($validation) use ($entries, $admins) {
//            $validation->entry_id = $entries->random()->id;
//            $validation->validated_by = $admins->random()->id;
//            $validation->save();
//        });
//
//        // Create raffle picks and associate with existing entries and promos
//        Rafflepick::factory()->count(5)->create()->each(function ($rafflepick) use ($entries, $promos) {
//            $rafflepick->entry_id = $entries->random()->id;
//            $rafflepick->promo_id = $promos->random()->id;
//            $rafflepick->save();
//        });
    }
}
