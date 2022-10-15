<?php

namespace App\Providers;

use App\Repositories\ApplicantRepository;
use App\Repositories\AuthRepository;
use App\Repositories\EductionRepository;
use App\Repositories\EventRepository;
use App\Repositories\StaffSocialLinkRepository;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Repositories\Interfaces\EductionRepositoryInterface;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Repositories\Interfaces\StaffSocialLinkRepositoryInterface;
use App\Repositories\Interfaces\JobCircularRepositoryInterface;
use App\Repositories\Interfaces\JobHistoryRepositoryInterface;
use App\Repositories\Interfaces\JobPositionRepositoryInterface;
use App\Repositories\Interfaces\StaffsRepositoryInterface;
use App\Repositories\Interfaces\MenuRepositoryInterface;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\PostTypeRepositoryInterface;
use App\Repositories\Interfaces\ServiceCenterRepositoryInterface;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use App\Repositories\Interfaces\TrainingRepositoryInterface;
use App\Repositories\JobCircularRepository;
use App\Repositories\JobHistoryRepository;
use App\Repositories\JobPositionRepository;
use App\Repositories\StaffsRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PostRepository;
use App\Repositories\PostTypeRepository;
use App\Repositories\ServiceCenterRepository;
use App\Repositories\TestimonialRepository;
use App\Repositories\TrainingRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    
    public function register() {
        $this->app->bind(StaffsRepositoryInterface::class, StaffsRepository::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(StaffSocialLinkRepositoryInterface::class, StaffSocialLinkRepository::class);
        $this->app->bind(MenuRepositoryInterface::class, MenuRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
        $this->app->bind(ServiceCenterRepositoryInterface::class, ServiceCenterRepository::class);
        $this->app->bind(TrainingRepositoryInterface::class, TrainingRepository::class);
        $this->app->bind(JobHistoryRepositoryInterface::class, JobHistoryRepository::class);
        $this->app->bind(EductionRepositoryInterface::class, EductionRepository::class);
        $this->app->bind(ApplicantRepositoryInterface::class, ApplicantRepository::class);
        $this->app->bind(JobCircularRepositoryInterface::class, JobCircularRepository::class);
        $this->app->bind(PostTypeRepositoryInterface::class, PostTypeRepository::class);
        $this->app->bind(JobPositionRepositoryInterface::class, JobPositionRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }

    public function boot() {
        //
    }
}
