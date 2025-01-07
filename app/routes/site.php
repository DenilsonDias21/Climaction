<?php

use app\controllers\Site;

/******* Routes ************/

$app->get('/site', Site::class.':index');

