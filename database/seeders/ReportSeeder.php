<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Keyword;
use App\Models\ProductAd;
use App\Models\Profile;
use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Report::truncate();
        User::truncate();
        Profile::truncate();
        ProductAd::truncate();
        Keyword::truncate();
        Campaign::truncate();

        $user = User::create([
                'name' => 'Amachete',
                'email' => 'test@test.com',
                'password' => Hash::make('amachete')
            ]);

        $profile = Profile::create([
            'bio' => 'It is sample bio',
            'description' => 'It is sample description',
        ]);

        $productAd = ProductAd::create([
            'title' => 'Test advertisement',
            'description' => 'This is a test advertisement from Amachete',
            'start_date' => Carbon::now(),
            'end_date' => Carbon::make('20-07-2021'),
        ]);

        $keyword = Keyword::create([
            'name' => 'test',
        ]);

        $campaign = Campaign::create([
            'name' => 'Test Campaign',
            'is_active' => true,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::make('20-07-2021'),
        ]);

        Report::create([
            'user_id' => $user->id,
            'profile_id' => $profile->id,
            'product_ad_id' => $productAd->id,
            'keyword_id' => $keyword->id,
            'campaign_id' => $campaign->id,
            'report_date' => Carbon::now(),
            'asin' => 'Test product',
            'impressions' => 100,
            'cost' => 1200.90,
            'averageImpressionPosition' => 100,
            'sales1d' => 90,
            'sales30d' => 2000,
            'sales1dSameSKU' => 34,
            'sales7dSameSKU' => 188,
            'sales30dSameSKU' => 10029,
            'conversions1d' => 99,
            'conversions7d' => 199,
            'conversions30d' => 1299,
            'conversions1dSameSKU' => 1245,
            'conversions7dSameSKU' => 3313,
            'conversions30dSameSKU' => 32313,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
