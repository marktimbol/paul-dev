<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Repositories\Jobs\JobRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

class AddJobCommand extends Job implements SelfHandling
{

    protected $title;
    protected $category;
    protected $subCategory;
    protected $description;
    protected $skills;
    protected $budgetType;
    protected $budgetCost;
    protected $location;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($title, $category, $subCategory, $description, $skills, $budgetType, $budgetCost, $location)
    {
        $this->title = $title;
        $this->category = $category;
        $this->subCategory = $subCategory;
        $this->description = $description;
        $this->skills = $skills;
        $this->budgetType = $budgetType;
        $this->budgetCost = $budgetCost;
        $this->location = $location;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(JobRepositoryInterface $job)
    {
        $data = [
            'title'         => $this->title,
            'category'      => $this->category,
            'subCategory'   => $this->subCategory,
            'description'   => $this->description,
            'skillsRequired'=> $this->skills,
            'budgetType'    => $this->budgetType,
            'budgetCost'    => $this->budgetCost,
            'location'      => $this->location
        ];

        $newJob = $job->store($data);

        //event( new UserHasPostedANewJob($newJob) );
    }
}
