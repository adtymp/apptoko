<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                Sign in to your account
            </h2>
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Or
                <a href="/register-partner" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    create a new account
                </a>
            </p>
        </div>
                    @if(session('gagal'))
                        <div class="mt-4 text-red-600 text-center">
                            {{session('gagal')}}
                        </div>
                    @endif
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{route('sigin')}}">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            Email address
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="email" name="email" type="email" required="" autofocus="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                            Password
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" name="password" type="password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                Remember
                            </label>
                        </div>
                        <div class="text-sm leading-5">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" name="login" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-700 border border-transparent rounded-md hover:bg-red-900 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out">
                                Sign in
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>      
</body>
</html>
