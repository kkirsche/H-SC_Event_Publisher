<h4 class="upcoming-header">Upcoming Events:</h4>
<?php
    UNL_UCBCN::displayRegion($this->output);
    echo '<p id="feeds">
            <a id="icsformat" title="ics format for upcoming events" href="'.UNL_UCBCN_Frontend::reformatURL($this->url,array('format'=>'ics')).'">ics format for upcoming events</a>
            <a id="rssformat" title="rss format for upcoming events" href="'.UNL_UCBCN_Frontend::reformatURL($this->url,array('format'=>'rss')).'">rss format for upcoming events</a>
            </p>'; ?>