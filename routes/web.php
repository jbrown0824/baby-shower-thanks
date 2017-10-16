<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\People;

Route::get('/thank-you/{slug}', function ($slug) {
    $person = People::where('slug', '=', $slug)->first();
    return view('welcome')->with('person', $person);
});

Route::get('/insert-thanks', function() {
   $people = [
        [
           'name' => 'Sarah',
           'note' => 'Sarah - thanks for the books. We can\'t wait for our kids to have as awesome of eating habits as yours do',
           'slug' => 'sarah',
        ],
        [
            'name' => 'Elizabeth',
            'note' => 'Elizabeth - thank you for the books. We can\'t wait to start reading to our little one.',
            'slug' => 'elizabeth',
        ],
        [
            'name' => 'Remi & Patrick',
            'note' => 'Remi & Patrick - thank you for all the baby stuff. We love the Rey blanket and can\'t wait to start tummy time on it. We\'re also excited to try the essential oils',
            'slug' => 'remi_patrick',
        ],
        [
            'name' => 'Nani & Poppy',
            'note' => 'Nani and Poppy - thank you for the beginning of \'Nani\'s Special Bookshelf\' collection. It will be the start of a great collection.',
            'slug' => 'nani_poppy',
        ],
        [
            'name' => 'Debrunners',
            'note' => 'Debrunners - thank you for the cute baby girl clothes. We especially like the sleeping bags.',
            'slug' => 'debrunners',
        ],
        [
            'name' => 'Dad & Mom',
            'note' => 'Dad and Mom - thank you for the mamaroo and the Star Trek onesie. We can\'t wait to continue the tradition of geeking out with our kid',
            'slug' => 'dad_mom',
        ],
        [
            'name' => 'Jewel',
            'note' => 'Jewel - thank you for the sunflower bag. It\'s super cute and Heather is going to look great rocking it',
            'slug' => 'jewel',
        ],
        [
            'name' => 'Denise',
            'note' => 'Denise - thank you for the baby blanket. We can\'t wait to spend cold nights wrapped up with it. It was also great to see you.',
            'slug' => 'denise',
        ],
        [
            'name' => 'Beckers',
            'note' => 'Beckers - thank you so much for all the baby stuff, especially the dog carrier - I mean baby bag. And a big thank you for hosting a great baby shower. It was perfect and low key.',
            'slug' => 'beckers',
        ],
        [
            'name' => 'Paul & Michelle',
            'note' => 'Paul & Michelle - thank you for the diapers and wipes. We can\'t even begin to contemplate how many of these we will need yet',
            'slug' => 'paul_michelle',
        ],
        [
            'name' => 'Joe & Yang',
            'note' => 'Joe & Yang - thank you for the diapers and cloth baby wipes. The cloth baby wipes will come in super handy - all the spit!',
            'slug' => 'joe_yang',
        ],
        [
            'name' => 'Dana',
            'note' => 'Dana - thank you for all the practical stuff. It\'s all stuff we\'ve had our eye on and we\'ll use some of it every day.',
            'slug' => 'dana',
        ],
        [
            'name' => 'Julie',
            'note' => 'Julie - thank you for outfitting our girl in the best nerd attire around. She will be hooked on all the right things from birth.',
            'slug' => 'julie',
        ],
        [
            'name' => 'Soft Dev',
            'note' => 'Everyone - thank you so much for all the baby stuff. Our little girl is now surrounded by a great starter kit of nerd. The Brown family felt very apart of the ATG SoftDev family.',
            'slug' => 'softDev',
        ],
        [
            'name' => 'Bri',
            'note' => 'Bri - thank you for putting on an excellent Harry Potter baby shower for me. It was great',
            'slug' => 'bri',
        ]
   ];

   foreach ($people as $person) {
       $model = new People();
       $model->name = $person['name'];
       $model->note = $person['note'];
       $model->slug = $person['slug'];
       $model->save();
   }
});