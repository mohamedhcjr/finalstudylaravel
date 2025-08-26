<?php

namespace App\Models;


class Job
{
    //
    public static function all() {
        return [
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York, NY'],
            ['title' => 'Frontend Developer', 'company' => 'Web Solutions', 'location' => 'San Francisco, CA'],
            ['title' => 'Backend Developer', 'company' => 'Data Systems', 'location' => 'Austin, TX'],
        ];
    }
}
