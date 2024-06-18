<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product List</title>
  <!-- Include your CSS -->
  @vite('resources/css/app.css')
</head>
<body>
  @include('components.searchBox')
  @include('components.navigation')

  <div class="w-full h-full container mx-auto">
    
  @include('components.jumbotron')
   
  <div class="w-full text-center mt-52 text-3xl font-bold border-b-2 border-gray-200 pb-8">
    <p>Jasa Kami</p>
  </div>
  
    <div class="grid grid-cols-3 gap-6 p-6">
      @foreach ($produk as $item)
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col">
          <div class="w-full h-[400px] overflow-hidden">
            <img src="{{ $item->gambar }}" alt="{{ $item->namaproduk }}" class="product-image w-full">
          </div>
          <div class="mt-4 flex-grow flex flex-col justify-between">
            <h3 class="text-lg font-semibold">{{ $item->namaproduk }}</h3>
            <div class="text-yellow-500">
              @for ($i = 0; $i < $item->rate; $i++)
                <span>&#9733;</span>
              @endfor
            </div>
            <div class="flex gap-8 mt-4">
              <p class="text-gray-900 font-bold">Rp. {{ $item->hargaafter }}</p>
              <p class="text-gray-500 line-through">Rp. {{ $item->hargabefore }}</p>
            </div>
            <button class="mt-4 w-full bg-blue-400 h-8 text-white rounded-lg hover:opacity-80">
              Lihat Produk
            </button>
          </div>
        </div>
      @endforeach
    </div>


  </div>

  @include('components.footer')

</body>
</html>
