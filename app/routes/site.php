<?php

use app\controllers\Site;

/******* Routes ************/

$app->get('/', Site::class.':index');

