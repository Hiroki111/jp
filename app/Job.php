<?php
namespace App;

class Job
{
    public static function getJobs()
    {
        return collect(config('jobs'))->map(function ($job, $i) {
            $job[0] = trim($job[0]);
            $job[1] = trim($job[1]);
            $job[2] = trim($job[2]);
            $job[3] = trim($job[4]);
            return $job;
        });
    }

    public static function getAuthorities()
    {
        return collect(config('jobs'))->map(function ($job) {
            return trim($job[3]);
        })->unique()->sort();
    }

    public static function getVisas()
    {
        return config('visas');
    }
}
