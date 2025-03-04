@extends('v1.layout.app')

@section('content')

    <x-container>

        <x-header>Setup</x-header>
        <ul>
        <x-context>Why build another framework?</x-context>
        <x-context>Installation</x-context>
        <x-context>Creating your first project</x-context>
        <x-context>Configuration</x-context>
        <x-context>Directory Structure</x-context>
        </ul>

        <x-title>
            Why build another framework?
        </x-title>

        <x-text>
            I've been trying a few different frameworks and putting things together of our own... it's never how you want it to be. I don't think this will be the perfect
            solution for everyone neither.
            <br />
            <br />
            I really like how Laravel and NestJS work and how you build with them. It inspired me to create something of my own. I originally created a lot of this for a
            hackathon project, but it was actually decent.
        </x-text>

        <x-title>
            Installation
        </x-title>

        <x-code whitespace="            ">
            npm install @envuso/cli -g
            yarn global add @envuso/cli
            npx @envuso/cli

            * You can now use "envuso" to create and manage your project
        </x-code>

        <x-title>
            Creating your first project
        </x-title>

        <div class="text">
            If you have installed the CLI tool from above, you can now generate your
            project by running
            <x-code :inline="true">envuso new</x-code>
            and following
            the steps, it should take less than 30 seconds.

            <br>
            <br>

            You can also clone the framework structure and set up everything yourself
        </div>
        <x-code whitespace="            ">
            git clone @envuso/framework my-awesome-project
            cd my-awesome-project
            //Install deps
            npm install
            yarn
        </x-code>

        <x-title>
            Configuration
        </x-title>
        <div class="text">
            You will also need to configure your .env file.
            <br>
            There will be an <strong>example.env</strong> file, which you can copy
            and rename to <strong>.env</strong> you can use
            <x-code :inline="true">cp example.env .env</x-code>
            <br>
            <br>
            You may need to change the following values:
            <br>
            <strong>APP_KEY,  APP_HOST,  CORS_ORIGIN</strong>
        </div>

        <x-title>
            Directory Structure
        </x-title>

        <x-text>
            As you can see, you don't start completely from scratch, there is a few
            classes that the framework needs, but this means you're also able to
            customise quite a few things to your liking.
        </x-text>

        <x-directory-structure />

    </x-container>

@endsection
