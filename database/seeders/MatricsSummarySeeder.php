<?php

namespace Database\Seeders;

use App\Models\Matric;
use App\Models\MatricsOption;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatricsSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coverage_counts_id = Matric::create([
            'name' => 'Coverage Counts',
        ]);

        $coverage_counts_data = [
            ['name' => 'Piece of Coverage', 'value' => 1 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Online Pieces', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Social Posts', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Offline Piece', 'value' => 1 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Twitter Posts', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Instagram Posts', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Facebook Posts', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'YouTube Videos', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'TikTok Videos', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
            ['name' => 'Spotify Clips', 'value' => 0 , 'parent_id' => $coverage_counts_id->id],
        ];

        MatricsOption::insert($coverage_counts_data);



        $coverage_views_id = Matric::create([
            'name' => 'Coverage Views',
        ]);

        $coverage_views_data = [
            ['name' => 'Estimated Views', 'value' => 0 , 'parent_id' => $coverage_views_id->id],
            ['name' => 'Est. Online Views', 'value' => 0 , 'parent_id' => $coverage_views_id->id],
            ['name' => 'Est. Social Views', 'value' => 0 , 'parent_id' => $coverage_views_id->id],
            ['name' => 'YouTube Views', 'value' => 0 , 'parent_id' => $coverage_views_id->id],
            ['name' => 'TikTok Plays', 'value' => 0 , 'parent_id' => $coverage_views_id->id],
        ]; 
        MatricsOption::insert($coverage_views_data);


        $engagements_id = Matric::create([
            'name' => 'Engagements',
        ]);

        $engagements_data = [
            ['name' => 'Engagements', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Social Shares', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Twitter Retweets', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Twitter Shares', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Twitter Likes', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Instagram Comments', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Instagram Likes', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'YouTube Likes', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Facebook Likes', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Facebook Comments', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Facebook Post Shares', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Facebook Shares', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Pinterest Shares', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'Spotify Likes', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'TikTok Video Shares', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'TikTok Comments', 'value' => 0 , 'parent_id' => $engagements_id->id],
            ['name' => 'TikTok Likes', 'value' => 0 , 'parent_id' => $engagements_id->id],
        ]; 
        MatricsOption::insert($engagements_data);


        $audiences_id = Matric::create([
            'name' => 'Audiences',
        ]);

        $audiences_data = [
            ['name' => 'Audience', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Online Readership', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Offline Audience', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Instagram Followers', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Twitter Followers', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Facebook Followers', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'YouTube Subscribers', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Spotify Followers', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'TikTok Followers', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Print Circulation', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'TV Audience', 'value' => 0 , 'parent_id' => $audiences_id->id],
            ['name' => 'Radio Listenership', 'value' => 0 , 'parent_id' => $audiences_id->id],
        ]; 
        MatricsOption::insert($audiences_data);


        $domain_authority_id = Matric::create([
            'name' => 'domain_authority',
        ]);

        $domain_authority_data = [
            ['name' => 'Avg. Domain Authority', 'value' => 0 , 'parent_id' => $domain_authority_id->id],
            ['name' => 'Max. Domain Authority', 'value' => 0 , 'parent_id' => $domain_authority_id->id],
        ]; 
        MatricsOption::insert($domain_authority_data);
    }
}
