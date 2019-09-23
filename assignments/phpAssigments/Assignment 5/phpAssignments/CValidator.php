<?php 
    function validate($job_title,$company_name,$location,$job_description,$salary,$key_skills)
    {
        if(empty($job_title)||strlen($job_title)<3||empty($company_name)||strlen($company_name)<3||empty($location)||strlen($location)<3||empty($job_description)||strlen($job_description)<3||empty($salary)||empty($key_skills))
        {
            return 1;
        }
        else if(!preg_match("/^[a-zA-Z][a-zA-Z ]*$/",$job_title))
        {
            return 2;
        }
        else
        {
            require 'config/connect.php';
            if(isset($salary[0]) and isset($salary[1]))
            {
                $sal = '800';
            }
            else if(!isset($salary[0]))
            {
                $sal = '300';
            }
            else
            {
                $sal = '500';
            }
            $insertQuery = "INSERT INTO jobs(salary,job_title,company,key_skills,location,job_description) VALUES('$sal','$job_title','$company_name','$key_skills','$location','$job_description')";
            $pdo->query($insertQuery);
            return 0;
        }
    }
?>