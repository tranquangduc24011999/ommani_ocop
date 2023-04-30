<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\UserRepositoryInterface',
            'App\Repositories\Eloquents\UserRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProofRepositoryInterface',
            'App\Repositories\Eloquents\ProofRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\UnitTypeRepositoryInterface',
            'App\Repositories\Eloquents\UnitTypeRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProductTypeRepositoryInterface',
            'App\Repositories\Eloquents\ProductTypeRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\LocationRepositoryInterface',
            'App\Repositories\Eloquents\LocationRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\EntityRepositoryInterface',
            'App\Repositories\Eloquents\EntityRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProductRepositoryInterface',
            'App\Repositories\Eloquents\ProductRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\QARepositoryInterface',
            'App\Repositories\Eloquents\QARepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\CouncilRepositoryInterface',
            'App\Repositories\Eloquents\CouncilRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\EvaluationRepositoryInterface',
            'App\Repositories\Eloquents\EvaluationRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\MarkRepositoryInterface',
            'App\Repositories\Eloquents\MarkRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\QuestionCommentRepositoryInterface',
            'App\Repositories\Eloquents\QuestionCommentRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\PushNotificationInterface',
            'App\Repositories\Eloquents\PushNotificationRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
