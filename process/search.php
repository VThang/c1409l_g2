<?php

require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';

function select() {
    $s_query = post("s_query");
    $filter = post("filter");
    redirect("../search.php?s_query=$s_query&filter=$filter");
}
