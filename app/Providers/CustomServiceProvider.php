<?php

namespace App\Providers;

use App\Repositories\Educations\EducationRepository;
use App\Repositories\Educations\EducationRepositoryInterface;
use App\Repositories\Experiences\WorkExperienceRepository;
use App\Repositories\Experiences\WorkExperienceRepositoryInterface;
use App\Repositories\Jobs\JobRepository;
use App\Repositories\Jobs\JobRepositoryInterface;
use App\Repositories\Skills\Categories\SkillCategoryRepository;
use App\Repositories\Skills\Categories\SkillCategoryRepositoryInterface;
use App\Repositories\Users\Skills\UserSkillRepository;
use App\Repositories\Users\Skills\UserSkillRepositoryInterface;
use App\Repositories\Users\UserRepository;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserSkillRepositoryInterface::class, UserSkillRepository::class);
        $this->app->bind(WorkExperienceRepositoryInterface::class, WorkExperienceRepository::class);
        $this->app->bind(EducationRepositoryInterface::class, EducationRepository::class);
        $this->app->bind(JobRepositoryInterface::class, JobRepository::class);
        $this->app->bind(SkillCategoryRepositoryInterface::class, SkillCategoryRepository::class);
    }
}
