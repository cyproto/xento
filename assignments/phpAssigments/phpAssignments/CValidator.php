<?php 
    include 'variables.php';
    include 'CPostJob.php';
    if(empty($job_title)||strlen($job_title)<3||empty($company_name)||strlen($company_name)<3||empty($location)||strlen($location)<3||empty($job_description)||strlen($job_description)<3||empty($salary)||empty($job_type))
    {
        echo "<script type='text/javascript'>alert('Error')</script>";
    }
    else
    {
        abc($salary,$job_title,$company_name,$job_type);
    }
?>