<?php

namespace App\Jobs;

use App\Events\UserHasRegistered;
use App\Jobs\Job;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

class RegisterUserJob extends Job implements SelfHandling
{

    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $country;
    protected $phoneNumber;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($firstName, $lastName, $email, $password, $country, $phoneNumber)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->country = $country;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepositoryInterface $user)
    {
        $data = [
            'firstName'     => $this->firstName,
            'lastName'      => $this->lastName,
            'email'         => $this->email,
            'password'      => $this->password,
            'country'       => $this->country,
            'phoneNumber'   => $this->phoneNumber
        ];

        $user = $user->store($data);

        event( new UserHasRegistered($user) );
    }
}
