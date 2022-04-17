<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @livewireStyles
    </head>
    <body class="antialiased">
        <h2>NBA Teams application</h2>
        <p>
            This application is a Proof of Concept (POC) 
            for the livewire computed properties usage with categories and subcategories.
        </p>
        <p>
            Check the 
            <a target="_blank"
               href="https://stackoverflow.com/questions/71806611/my-livewire-updatedfoo-not-updating-at-all">
                original discussion here
            </a>
        </p>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <livewire:categories-list />
        </div>
        @livewireScripts
    </body>
</html>
