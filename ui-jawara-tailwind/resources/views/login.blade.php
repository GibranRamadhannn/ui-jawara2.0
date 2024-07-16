<!DOCTYPE html>
<html lang="en" class="font-poppins">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="h-screen flex items-center justify-center bg-gray-100 bg-cover"
    style="background-image: url('{{ asset('img/bg-login.jpg') }}');">
    <div class="relative h-full w-full flex items-center">
        {{-- BG IMAGE --}}
        <div class="relative w-full md:w-1/2 bg-transparent p-8 md:p-16 z-10 h-full flex flex-col justify-center">
            <P class="text-7xl font-bold mb-4 text-white flex subpixel-antialiased">JAWARA <span
                    class="text-yellow1 ml-2">2.0</span>
            </P>
            <img src="{{ asset('img/pln.PNG') }}" alt="PLN Logo" class="login-image w-48 h-auto">
        </div>
        {{-- BG IMAGE --}}

        {{-- LOGIN ROW --}}
        <div
            class="relative w-full md:w-2/5 ml-auto bg-white p-8 md:p-16 rounded-l-3xl z-10 h-full flex flex-col justify-center">

            {{-- TITLE --}}
            <h2 class="text-2xl font-bold mb-10 text-text1 flex flex-col items-center">Sign In To JAWARA 2.0</h2>
            {{-- TITLE --}}

            {{-- FORMS --}}
            {{-- EMAIL ADDRESS --}}
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-text1">Username</label>
                <input id="email" type="email" name="email" required autocomplete="email" autofocus
                    class="mt-1 block w-full px-3 py-2 bg-bg-forms border-2 border-border1 rounded-lg shadow-lg focus:outline-none focus:ring-click1 focus:border-click1 focus-within:shadow-lg sm:text-sm"
                    placeholder="Input your username">
            </div>
            {{-- EMAIL ADDRESS --}}

            {{-- PASSWORD --}}
            <div class="mb-3">
                <label for="password" class="block text-sm font-medium text-text1">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="mt-1 block w-full px-3 py-2 bg-bg-forms border-2 border-border1 rounded-lg shadow-lg focus:outline-none focus:ring-click1 focus:border-click1 focus-within:shadow-lg sm:text-sm"
                    placeholder="Password">
            </div>
            {{-- PASSWORD --}}
            {{-- FORMS --}}

            {{-- FORGOT PASSWORD --}}
            <div class="text-sm mb-10 flex flex-col text-left">
                <a href="" class=" text-text1 hover:text-click1">
                    Password Forgotten?
                </a>
            </div>
            {{-- FORGOT PASSWORD --}}

            {{-- BUTTON LOGIN --}}
            <div>
                <a href="{{ url('dashboard') }}">
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-3xl shadow-sm text-sm font-medium text-white bg-bg-button hover:bg-click1 active:bg-click1 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-bg-button mb-5 focus-within:drop-shadow-sm">
                        Login
                    </button>
                </a>

            </div>
            {{-- BUTTON LOGIN --}}

            <div class="flex items-center justify-between mb-4">
                {{-- REMEMBER ME --}}
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="h-4 w-4 text-text1 focus:ring-click1 border-border1 rounded">
                    <label for="remember_me" class="ml-2 block text-sm font-medium text-text1">
                        Remember Me
                    </label>
                </div>
                {{-- REMEMBER ME --}}
            </div>
        </div>
        {{-- LOGIN ROW --}}
    </div>
</body>

</html>
