<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

</head>
<body>
<main class="profile-page">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-16 bg-blueGray-200">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">
                <img alt="..." src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button class="bg-red-700 active:bg-red-900 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  Edit
                </button>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">
              <div class="flex justify-center py-4 lg:pt-4 pt-8">
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">22</span><span class="text-sm text-blueGray-400">Friends</span>
                </div>
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span><span class="text-sm text-blueGray-400">Photos</span>
                </div>
                <div class="lg:mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">89</span><span class="text-sm text-blueGray-400">Comments</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-12">
            <h3 class="text-4xl font-semibold leading-normal text-blueGray-700 mb-2">
            <div class="text-3xl leading-normal mt-0 mb-2 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>{{ $nama }}
            </div>
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>{{ $email}}
            </div>
            <div class="mb-2 text-blueGray-600 mt-10">
              "Bio"
            </div>
          </div>
          <div class="py-5 border-t border-blueGray-200">
            <div class="w-full flex justify-center space-x-96">
                <h2 class="text-3xl font-bold ">Product</h2>
                <!-- This is an example component -->
                <div class="max-w-2xl mx-auto">
                
                <!-- Modal toggle -->
                <button class="block text-white bg-red-700 hover:bg-red-900 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button" data-modal-toggle="authentication-modal">
                + Add Product
                </button>

                <!-- Main modal -->
                <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center pt-52">
                    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                            <div class="flex justify-end p-2">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                            </div>
                            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="POST">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add Product</h3>
                                <div class="relative border-2 border-gray-300 border-dashed rounded-lg p-6" id="dropzone">
                                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 z-50" />
                                    <div class="text-center">
                                        <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="">

                                        <h3 class="mt-2 text-sm font-medium text-gray-900">
                                            <label for="file-upload" class="relative cursor-pointer">
                                                <span>Drag and drop</span>
                                                <span class="text-indigo-600"> or browse</span>
                                                <span>to upload</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                        </h3>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PNG, JPG, GIF up to 5MB
                                        </p>
                                    </div>

                                    <img src="" class="mt-4 mx-auto max-h-40 hidden" id="preview">
                                </div>

                                <script>
                                    var dropzone = document.getElementById('dropzone');

                                    dropzone.addEventListener('dragover', e => {
                                        e.preventDefault();
                                        dropzone.classList.add('border-indigo-600');
                                    });

                                    dropzone.addEventListener('dragleave', e => {
                                        e.preventDefault();
                                        dropzone.classList.remove('border-indigo-600');
                                    });

                                    dropzone.addEventListener('drop', e => {
                                        e.preventDefault();
                                        dropzone.classList.remove('border-indigo-600');
                                        var file = e.dataTransfer.files[0];
                                        displayPreview(file);
                                    });

                                    var input = document.getElementById('file-upload');

                                    input.addEventListener('change', e => {
                                        var file = e.target.files[0];
                                        displayPreview(file);
                                    });

                                    function displayPreview(file) {
                                        var reader = new FileReader();
                                        reader.readAsDataURL(file);
                                        reader.onload = () => {
                                            var preview = document.getElementById('preview');
                                            preview.src = reader.result;
                                            preview.classList.remove('hidden');
                                        };
                                    }
                                </script>
                                <div>
                                    <label for="nama_produk" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Name Product</label>
                                    <input type="nama_produk" name="nama_produk" id="nama_produk" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <div>
                                    <label for="kategori" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Kategori</label>
                                    <input type="kategori" name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <div>
                                    <label for="gender" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Gender</label>
                                    <input type="gender" name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <div>
                                    <label for="price" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Price</label>
                                    <input type="price" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <div>
                                    <label for="deskripsi" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Kategori</label>
                                    <input type="deskripsi" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-900 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>

                <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
                <!-- <a href="#pablo" class="font-normal text-pink-500">Show more</a> -->
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="relative overflow-hidden">
                    <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" alt="Product">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-300">View Product</button>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mt-4">Product Name</h3>
                <p class="text-gray-500 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                    ante justo. Integer euismod libero id mauris malesuada tincidunt.</p>
                <div class="flex items-center justify-between mt-4">
                    <span class="text-gray-900 font-bold text-lg">$29.99</span>
                    <button class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Add to Cart</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="relative bg-blueGray-200 pt-8 pb-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Made with <a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Creative Tim</a>.
        </div>
      </div>
    </div>
  </div>
</footer>
  </section>
</main>
</body>
</html>