# Laravel Auth in MaterializeCSS

By default, `php artisan make:auth` generates authentication boilerplate templates using Boostrap.

This project allows you to replace that with MaterializeCSS instead.

# How to Use

 - Git clone this repositorory, or download as zip
 - Copy the `auth` folder into your `resources/views` folder within your Laravel 5 project
 - Change the `@extends('layout')` within each auth template to match what your layout file name is. Default is `layout.blade.php`
 - Run and profit!