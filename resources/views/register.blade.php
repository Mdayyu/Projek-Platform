<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
  @include('components.navigation')

  <form class="container mx-auto w-[1000px] mt-20 border p-20">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div>
        <label for="namalengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
        <input type="text" id="first_name" name="namalengkap"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />
      </div>
     
      <div>
        <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
        <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Flowbite" required />
      </div>
      <div>
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
      </div>
      <div>
        <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Website URL</label>
        <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="flowbite.com" required />
      </div>
      <div>
        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900">Unique visitors (per month)</label>
        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required />
      </div>
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
      <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required />
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
      <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
    </div>
    
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
  </form>

  @include('components.footer')
</body>
</html>
