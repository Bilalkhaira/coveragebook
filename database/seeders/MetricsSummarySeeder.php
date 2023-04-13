<?php

namespace Database\Seeders;

use App\Models\Metric;
use App\Models\MetricsOption;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetricsSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coverage_counts_id = Metric::create([
            'name' => 'Coverage Counts',
        ]);

        $coverage_counts_data = [
            ['name' => 'Piece of Coverage', 'value' => 1 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Total number of online, offline and social clips in this book'],
            ['name' => 'Online Pieces', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Amount of coverage published on websites, blogs and online outlets'],
            ['name' => 'Social Posts', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of posts on social media channels such as Instagram, Twitter and Facebook'],
            ['name' => 'Offline Piece', 'value' => 1 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Amount of coverage featured in print publications & broadcast channels'],
            ['name' => 'Twitter Posts', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of Tweets posted on Twitter'],
            ['name' => 'Instagram Posts', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of image and video posts on Instagram'],
            ['name' => 'Facebook Posts', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of posts on Facebook'],
            ['name' => 'YouTube Videos', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of videos on YouTube'],
            ['name' => 'TikTok Videos', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of videos on TikTok'],
            ['name' => 'Spotify Clips', 'value' => 0 , 'metric_id' => $coverage_counts_id->id, 'hint' => 'Number of Spotify playlists'],
        ];

        MetricsOption::insert($coverage_counts_data);



        $coverage_views_id = Metric::create([
            'name' => 'Coverage Views',
        ]);

        $coverage_views_data = [
            ['name' => 'Estimated Views', 'value' => 0 , 'metric_id' => $coverage_views_id->id, 'hint' => 'Prediction of lifetime views of coverage, based on audience reach & engagement rate on social'],
            ['name' => 'Est. Online Views', 'value' => 0 , 'metric_id' => $coverage_views_id->id, 'hint' => 'Prediction of lifetime views of online coverage, based on audience reach & number of shares on social'],
            ['name' => 'Est. Social Views', 'value' => 0 , 'metric_id' => $coverage_views_id->id, 'hint' => 'Prediction of lifetime views of social posts, based on audience reach and engagement rate'],
            ['name' => 'YouTube Views', 'value' => 0 , 'metric_id' => $coverage_views_id->id, 'hint' => 'Total number of times video content has been viewed on YouTube'],
            ['name' => 'TikTok Plays', 'value' => 0 , 'metric_id' => $coverage_views_id->id, 'hint' => 'Total number of times video content has been played on TikTok'],
        ]; 
        MetricsOption::insert($coverage_views_data);


        $engagements_id = Metric::create([
            'name' => 'Engagements',
        ]);

        $engagements_data = [
            ['name' => 'Engagements', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Combined total of likes, comments and shares on social media platforms'],
            ['name' => 'Social Shares', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the online articles have been shared on social media'],
            ['name' => 'Twitter Retweets', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the posts have been Retweeted on Twitter'],
            ['name' => 'Twitter Shares', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the online articles have been shared on Twitter'],
            ['name' => 'Twitter Likes', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the posts have been liked on Twitter'],
            ['name' => 'Instagram Comments', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of comments the posts have received on Instagram'],
            ['name' => 'Instagram Likes', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the posts have been liked on Instagram'],
            ['name' => 'YouTube Likes', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the videos have been liked on YouTube'],
            ['name' => 'Facebook Likes', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of likes the posts have received on Facebook'],
            ['name' => 'Facebook Comments', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of comments the posts have received on Facebook'],
            ['name' => 'Facebook Post Shares', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the Facebook posts have been shared on Facebook'],
            ['name' => 'Facebook Shares', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the online articles have been shared on Facebook'],
            ['name' => 'Pinterest Shares', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the online articles have been shared on Pinterest'],
            ['name' => 'Spotify Likes', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of likes received on Spotify'],
            ['name' => 'TikTok Video Shares', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of times the TikTok videos have been shared on TikTok'],
            ['name' => 'TikTok Comments', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of comments the videos have received on TikTok'],
            ['name' => 'TikTok Likes', 'value' => 0 , 'metric_id' => $engagements_id->id, 'hint' => 'Number of likes the videos have received on TikTok'],
        ]; 
        MetricsOption::insert($engagements_data);


        $audiences_id = Metric::create([
            'name' => 'Audiences',
        ]);

        $audiences_data = [
            ['name' => 'Audience', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of publication-wide audience figures for all outlets featuring coverage'],
            ['name' => 'Online Readership', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total number of people that visit the websites featuring coverage'],
            ['name' => 'Offline Audience', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total number of people for Print/TV/Radio'],
            ['name' => 'Instagram Followers', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of Instagram followers for the accounts that posted content'],
            ['name' => 'Twitter Followers', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of Twitter followers for the accounts that posted content'],
            ['name' => 'Facebook Followers', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of Facebook followers for the accounts that posted content'],
            ['name' => 'YouTube Subscribers', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of YouTube subscribers for the accounts that posted content'],
            ['name' => 'Spotify Followers', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of Spotify followers for the accounts that posted content'],
            ['name' => 'TikTok Followers', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Combined total of TikTok followers for the accounts that posted content'],
            ['name' => 'Print Circulation', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Total Print Circulation'],
            ['name' => 'TV Audience', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Total TV Audience'],
            ['name' => 'Radio Listenership', 'value' => 0 , 'metric_id' => $audiences_id->id, 'hint' => 'Total Listeners'],
        ]; 
        MetricsOption::insert($audiences_data);


        $domain_authority_id = Metric::create([
            'name' => 'domain_authority',
        ]);

        $domain_authority_data = [
            ['name' => 'Avg. Domain Authority', 'value' => 0 , 'metric_id' => $domain_authority_id->id, 'hint' => 'A 0-100 measure of the authority of the site coverage appears on. Provided by Moz'],
            ['name' => 'Max. Domain Authority', 'value' => 0 , 'metric_id' => $domain_authority_id->id, 'hint' => 'A 0-100 measure of the authority of the site coverage appears on. Provided by Moz'],
        ]; 
        MetricsOption::insert($domain_authority_data);
    }
}
