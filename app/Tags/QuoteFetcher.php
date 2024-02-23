<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class QuoteFetcher extends Tags
{
    /**
     * The {{ quote_fetcher }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $data = collect([
            [

                'author' => 'Tom Havaford',
                'quotes' => [
                    'The best way to predict the future is to create it.',
                    'The only way to do great work is to love what you do.',
                    'The best preparation for tomorrow is doing your best today.',
                    'The only limit to our realization of tomorrow will be our doubts of today.',
                    'The only source of knowledge is experience.',
                ],
            ],
            [
                'author' => 'Thomas Edison',
                'quotes' => [
                    'I have not failed. I’ve just found 10,000 ways that won’t work.',
                    'Many of life’s failures are people who did not realize how close they were to success when they gave up.',
                    'Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.',
                    'Genius is one percent inspiration and ninety-nine percent perspiration.',
                    
                ],
            ]
        ]);
   

        // $limit = $this->params->get('limit', 1);
        $author = $this->params->get('author', 'Thomas Edison');
        $filteredData = $data->where('author', $author)->first();
// var_dump($filteredData['quotes'][array_rand($filteredData['quotes'])]);
//         die();
        return $filteredData['quotes'][array_rand($filteredData['quotes'])];
    }
}
// To generate the tag, we can use the following command:
// `php please make:tag QuoteFetcher`

/* 
We can also develop an Addon and host it on packagist using the following command:
`php please make:addon statamic/quotefetcher -- tag`
This creates a composer package and sets up a symlink to the Statamic site.
We can then publish this on the Statamic Marketplace if we want: https://statamic.com/marketplace
*/
