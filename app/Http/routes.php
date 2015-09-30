<?php

# app/Http/routes.php

use App\Models\Quote;

/**
 * Display the today quote
 */
$app->get('/', function() use ($app) {

    /*
     * Picks a different quote every day
     * (for a maximum of 366 quotes)
     *
     *   - $count: the total number of available quotes
     *   - $day: the current day of the year (from 0 to 365)
     *   - $page: the page to look for to retrieve the
     *            correct record
     */
    $count = Quote::count();
    $i=rand(1,$count);

    $quote = Quote::findOrFail($i);
    return view('quote', compact('quote'));
});
