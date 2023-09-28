<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="row justify-content-center">
        <div class="row justify-content-center mt-3 text-center">
            <div class="col-md-6">
                <h1 class="">Short URL - Documentation</h1>
            </div>
            <div class="col-md-2 d-flex">
                <div><a class="btn btn-success  me-1" href="{{ route('login') }}">Login</a></div>
                <div><a class="btn btn-success"  href="{{ route('register') }}">Register</a></div>
            </div>
        </div>

        <div class="card col-md-8 my-3">
            <div class="card-body">
                <p>Creating documentation for a simple URL shortener website with click count and user authentication is
                    essential to help users understand how to use your service effectively. Below is a basic template
                    for such documentation:</p>
                <div>click here to short url from long url without  <a class="btn btn-danger"
                        href="{{ route('shorten-url-form') }}">Link Shortner</a>
                </div>
                <h2>Table of Contents</h2>
                <ol>
                    <li>Introduction</li>
                    <li>Getting Started<ul>
                            <li>Prerequisites</li>
                            <li>Installation</li>
                        </ul>
                    </li>
                    <li>User Registration and Authentication</li>
                    <li>Shortening URLs</li>
                    <li>Managing Shortened URLs</li>
                    <li>Click Tracking</li>
                    <li>API Documentation (Optional)</li>
                    <li>Troubleshooting</li>
                    <li>Frequently Asked Questions (FAQs)</li>
                    <li>Contact Information</li>
                    <li>Appendix</li>
                </ol>
                <h2>1. Introduction</h2>
                <p>Welcome to the Short URL Website documentation. This service allows you to shorten long URLs into
                    easily shareable, shorter links, and provides user authentication to manage and track those links.
                </p>
                <h2>2. Getting Started</h2>
                <h3>Prerequisites</h3>
                <p>Before using the Short URL Website, ensure you have the following prerequisites:</p>
                <ul>
                    <li>Web server (e.g., Apache, Nginx)</li>
                    <li>PHP (version X.X or later)</li>
                    <li>MySQL database (or equivalent)</li>
                    <li>Composer (for PHP dependencies)</li>
                </ul>
                <h3>Installation</h3>
                <ol>
                    <li>
                        <p>Clone the repository from GitHub:
                            git clone https://github.com/yourusername/short-url-website.git
                        </p>


                    </li>
                    <li>
                        <p>Configure your web server to point to the project's public directory.</p>
                    </li>
                    <li>
                        <p>Create a MySQL database and configure the database connection in the project's configuration
                            file.</p>
                    </li>
                    <li>
                        <p>Install PHP dependencies using Composer:</p>
                        <div>
                            <div>composer install
                    <li>
                        <p>Run migrations to set up the database schema:</p>
                        <div>
                            <div>php artisan migrate
                    </li>
                </ol>
                <h2>3. User Registration and Authentication</h2>
                <p>To use the URL shortening service, users must register and authenticate.</p>
                <ul>
                    <li>Access the website and click on the "Register" link to create an account.</li>
                    <li>After registration, log in with your credentials.</li>
                </ul>
                <h2>4. Shortening URLs</h2>
                <p>Once authenticated, you can shorten URLs.</p>
                <ol>
                    <li>Log in to your account.</li>
                    <li>Click on the "Shorten URL" button.</li>
                    <li>Enter the long URL you want to shorten.</li>
                    <li>Click "Shorten."</li>
                    <li>A shortened URL will be generated, which you can copy and share.</li>
                </ol>
                <h2>5. Managing Shortened URLs</h2>
                <p>Registered users can manage their shortened URLs.</p>
                <ol>
                    <li>Log in to your account.</li>
                    <li>Go to the "My Shortened URLs" section.</li>
                    <li>Here, you can view, edit, or delete your shortened URLs.</li>
                </ol>
                <h2>6. Click Tracking</h2>
                <p>The service tracks the number of clicks on each shortened URL.</p>
                <ol>
                    <li>Log in to your account.</li>
                    <li>Navigate to the "My Shortened URLs" section.</li>
                    <li>Click on a shortened URL to view its statistics, including the number of clicks.</li>
                </ol>
                <h2>7. API Documentation (Optional)</h2>
                <p>If you wish to offer an API for URL shortening, provide detailed documentation on how to use it,
                    including endpoints, request methods, and authentication.</p>
                <h2>8. Troubleshooting</h2>
                <p>If you encounter any issues while using the Short URL Website, refer to the troubleshooting section
                    in the documentation for solutions to common problems.</p>
                <h2>9. Frequently Asked Questions (FAQs)</h2>
                <p>Include a section with frequently asked questions and answers to help users resolve common queries.
                </p>
                <h2>10. Contact Information</h2>
                <p>Provide contact information for users to reach out for support or assistance.</p>
                <h2>11. Appendix</h2>
                <p>Include any additional information, such as system requirements, acknowledgments, or version history.
                </p>
                <p>Remember to keep your documentation updated as you make changes or improvements to your website.
                    Clear and concise documentation will enhance the user experience and encourage users to utilize your
                    service effectively.</p>
            </div>
        </div>

    </div>
</body>

</html>
