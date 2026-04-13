<!-- @format -->

# MVC (INT-221) Course Workspace

Welcome to the workspace for the MVC (INT-221) course. This repository contains various Laravel 11 projects and tasks related to the course curriculum.

## Directory Structure

- **CA1/** - Continuous Assessment 1 project.
- **Class 2/** - Second class project exercises.
- **Class3/** - Third class project exercises.
- **Revision/** - Practical revision and middleware/controller exercises.
- **SecureRoute/** - Project demonstrating secure routing with Laravel Breeze.

## Overview of Tasks

_Based on `Task.txt`_

### UNIT-2

- **Task 1:**
  - Routing to `/home/details/mine` returning a view showing 5 subjects with marks.
  - Routing to `home/details/name` to demonstrate named routes.
  - Routing to `home/details/group` using data passing methodologies to display 5 certifications.
- **Task 2:**
  - Grouped routes under a common prefix for URLs: `/home/detail/info`, `/home/detail/data`, and `/home/detail/storage`.
  - Demonstrations of string manipulation (reverse), named route rendering, and right-angle triangle patterns.
  - Demonstration of a fallback route.

### UNIT-3

- **Task 1:** Create a `CalciController` to perform arithmetic methods with parameters.
- **Task 2:** Pass name and reg.no in a route function and display them using `echo`.
- **Task 3:** Create a controller named after yourself with methodologies to print reversed strings and numbers over distinct URLs (`fun/1/rev`, `fun/rev/num`).
- **Task 4:** Set route constraints allowing access only when `name === dhruva` & `country === india`.
- **Task 5:** Create views for `blog`, `about`, and `contact` (includes adding images, bios, and mock data for requirements).
- **Task 6:** Create a `mainlayout` blade framework with an `app.blade.php` acting as the structural wrapper (including inline nav-bar, specific image sizes, and a standard footer text).

## Troubleshooting & Notes

- Check `temp_error.txt` for recurring local PHP syntax logs.
- Remember that in **Laravel 11**, traditional controller middleware defined in constructors should instead be constructed using the `HasMiddleware` interface and a `middleware()` static methodology. Middleware aliases should also point correctly to the middleware classes in `bootstrap/app.php` rather than controllers.

## Useful Laravel Commands (from Requirements)

### Project Setup
- **Create a new project:** `composer create-project laravel/laravel {project name}`
- **Run the project:** `php artisan serve` (run from within the project directory)
- **Install Laravel Breeze:** 
  ```bash
  composer require laravel/breeze --dev
  php artisan breeze:install blade no Pest
  ```

### Artisan Generators
- **Views**: `php artisan make:view {view name}`
- **Models**: `php artisan make:model DemoIs -mcr`
- **Controllers**:
  - Basic: `php artisan make:controller FirstIsController`
  - Invokable: `php artisan make:controller InvokableIsController --invokable`
  - Resource: `php artisan make:controller ResourcesIsController --resource`
  - API: `php artisan make:controller APIIsController --api`
- **Middleware**:
  - Basic: `php artisan make:middleware MiddlewareIS`
  - Global: `php artisan make:middleware GlobalIsMiddleware`
