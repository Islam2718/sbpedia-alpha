<div align="center" style="text-align:center;">
    <a href="https://laravel.com" target="_blank">
        <img src="https://th.bing.com/th/id/R.1939adc1a6dc9e25954a77684c590457?rik=ALgGE7VuOqkGNg&riu=http%3a%2f%2fsocialbusinesspedia.com%2fimg%2flogo%2fsocial-business-pedia-logo.png&ehk=HS76CdbpMPzkMe1jz3OHCSEYKOqWtOTvFSV1yvtn8nI%3d&risl=&pid=ImgRaw&r=0" width="100px" alt="Laravel Logo">
        <h4>Social Business Pedia</h4>
        <small>SBPEDIA-ALPHA</small>
    </a>
</div>
<br/><br/>
<div align="center" style="margin-top:50px; ">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</div>

## About SBPEDIA-ALPHA

Social business pedia is a web application developed using laravel 9. This application with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Installation Guide

Step1: Clone project. 

Step2: Create Database and update .env file for database.

Step3: Run command into terminal [command] - composer install

Step4: Run command into terminal [command] - php artisan migrate

Step5: Run command into terminal [command] - php artisan serve

## Modules

    - Auth - for authentication</li>
    - Profile
    - Rbac - Role based user access control
    - Event
    - News
    - SB Wiki
    - SB Wiki
    - Settings
        --Language settings

## Tables & Schemas


users (

    $table->id();
    $table->string('user_type');
    $table->string('person_id');
    $table->string('username');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at');
    $table->text('secret_question');
    $table->text('write_answer');
    $table->text('secret_question_answer');
    $table->string('left_after_complete');
    $table->dateTime('last_login');
    $table->string('last_login_ip');
    $table->string('last_login_browser');
    $table->string('created_ip');
    $table->tinyInteger('status')->default('0')->comments('0 = new, 1 = active, 2 = suspended');
    $table->text('old_data');
    $table->bigInteger('user_group_id');
    $table->bigInteger('user_sub_group_id');
    $table->tinyInteger('is_old_database');
    $table->rememberToken();
    $table->timestamps(); // create_at, updated_at    
)


people(

    $table->id();
    $table->integer('signup_category_id');
    $table->integer('signup_sub_category_id');
    $table->string('first_name');
    $table->string('last_name');
    $table->string('sur_name');
    $table->string('email');
    $table->string('identity');
    $table->string('gender');
    $table->string('organization_name');
    $table->bigInteger('organization_id');
    $table->date('dob');
    $table->string('profile_image');
    $table->string('cover_image');
    $table->string('online_profile');
    $table->text('interested_in');
    $table->text('about_myself');
    $table->string('facebook');
    $table->string('twitter');
    $table->string('linkedin');
    $table->string('google');
    $table->tinyInteger('is_organization_root_user');
    $table->integer('status');
    $table->timestamps(); //created-at, updated-at     
 )

### Developer Guide (Hinths)

module create command : php artisan module:make Module_name

controller create into modules : php artisan module:make-controller Controller_name Module_name

model create into modules : php artisan module:make-model Model_name Module_name

migrate tables in modules : php artisan module:migrate Module_name

migrate refresh in modules : php artisan module:migrate-refresh Module_name

migration in modules : php artisan module:make-migration create_table_names_table Module_name


## roles and permissions are managed by Spatie
  
  documentation url : https://spatie.be/docs/laravel-permission/v5/introduction


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Powerd By - 
Grameen Communication [Visit-Website](https://grameen.technology).
