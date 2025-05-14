<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeedLinks extends Component
{
    public $feeds;

    public function __construct()
    {
        // Vous pouvez personnaliser vos flux ici
        $this->feeds = [
            [
                'type' => 'application/atom+xml',
                'url' => '/feed/atom',
                'title' => 'Flux Atom des spectacles'
            ],
            [
                'type' => 'application/rss+xml',
                'url' => '/feed/rss',
                'title' => 'Flux RSS des spectacles'
            ]
        ];
    }

    public function render()
    {
        return view('components.feed-links');
    }
}
