<?php 
    function setVar($id)
    {
        $id1 = $id;
        return 0;
    }
    function validate($job_title,$company_name,$location,$job_description,$salary,$job_type)
    {
        if(empty($job_title)||strlen($job_title)<3||empty($company_name)||strlen($company_name)<3||empty($location)||strlen($location)<3||empty($job_description)||strlen($job_description)<3||empty($salary)||empty($job_type))
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
            $updateQuery = "update jobs set salary=$sal,job_title=$job_title,company=$company_name,job_type=$job_type,location=$location,job_description=$job_description where id=$id1";
            $pdo->query($updateQuery);
            return 0;
        }
    }
?>