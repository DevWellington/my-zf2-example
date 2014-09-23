<?php

namespace Ribeiro\Services;

class FeedService {

    public function getData()
    {
        // Fetch the latest Slashdot headlines
        try {
            $slashdotRss =
                \Zend\Feed\Reader\Reader::import('http://rss.slashdot.org/Slashdot/slashdot');
        } catch (\Zend\Feed\Exception\Reader\RuntimeException $e) {
            // feed import failed
            echo "Exception caught importing feed: {$e->getMessage()}\n";
            exit;
        }

        // Initialize the channel/feed data array
        $channel = array(
            'title'       => $slashdotRss->getTitle(),
            'link'        => $slashdotRss->getLink(),
            'description' => $slashdotRss->getDescription(),
            'items'       => array()
        );

        // Loop over each channel item/entry and store relevant data for each
        foreach ($slashdotRss as $item) {
            $channel['items'][] = array(
                'title'       => $item->getTitle(),
                'link'        => $item->getLink(),
                'description' => $item->getDescription()
            );
        }

        return $channel;
    }
} 