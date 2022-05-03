<?php

require_once "../vendor/autoload.php";

require_once "course.php";

$report = new CourseReport;

$report->run()->render(); 