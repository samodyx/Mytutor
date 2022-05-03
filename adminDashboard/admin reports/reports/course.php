<?php

class CourseReport extends \koolreport\KoolReport
{

    protected fuction settings()
    {
            return array(
                    "dataSources"=>array(
                        "automaker"=>array(
                            "connectionString"=>"mysql:host=localhost;dbname=mytutor",
                            "user"=>"root",
                            "password"=>"mytutor@123",
                            "charset"=>"uft8"
                        )
                    )
            );

    }

}