<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body>
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Register
          </h2>
        </div>
      
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="{{route('submit')}}">
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
                <label for="username" class="block text-sm font-medium text-gray-700 leading-5">
                  Username
                </label>
      
                <div class="mt-1 rounded-md shadow-sm">
                  <input id="nama" name="nama" type="nama" required="" autofocus="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                </div>
              </div>

              <div class="mt-6">
                <label for="phone" class="block text-sm font-medium text-gray-700 leading-5">
                  Phone
                </label>
      
                <div class="mt-1 rounded-md shadow-sm">
                  <input id="telp" name="telp" type="telp" required="" autofocus="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                </div>
              </div>
              <div class="mt-6">
                <label for="alamat" class="block text-sm font-medium text-gray-700 leading-5">
                  Alamat
                </label>
      
                <div class="mt-1 rounded-md shadow-sm">
                  <input id="alamat" name="alamat" type="alamat" required="" autofocus="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 ">
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
      
              <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                  <button name="register" type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-700 border border-transparent rounded-md hover:bg-red-900 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out">
                    Register
                  </button>
                </span>
              </div>

              <?php if (!empty($register_error)): ?>
                  <div class="mt-4 text-red-600 text-center">
                      <?= $register_error; ?>
                  </div>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
</body>
</html>
