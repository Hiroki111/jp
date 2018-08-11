<?php
namespace App;

class Job
{
    public static function getJobs()
    {
        return collect(config('jobs'))->map(function ($job) {
            $job[0] = trim($job[0]);
            $job[1] = trim($job[1]);
            $job[2] = trim($job[2]);
            $job[3] = trim($job[3]);
            return $job;
        });
    }

    public static function getAuthorities()
    {
        return collect(config('jobs'))->map(function ($job) {
            return trim($job[3]);
        })->unique()->sort();
    }
}
