<?php

class CourseReport extends \koolreport\KoolReport
{
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "automaker"=>array(
                    "connectionString"=>"mysql:host=localhost:3308;
                    dbname=mytutor",
                    "username"=>"root",
                    "password"=>"mytutor@123",
                    "charset"=>"uft8"
                             )
                     )
                );
    }

    protected function setup()
    {
        $this->src("mytutor")
        ->query("
        SELECT *
        FROM lecturercourses
        ")
        ->pipe($this->dataStore("result"));
    }
}

?>