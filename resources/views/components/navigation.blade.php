    <nav class="flex py-4 justify-center items-center w-full h-20 bg-pink-600 text-white">

      <div class="flex">
        <ul class="flex gap-10 w-full">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="">Kategori</a>
          </li>
          <li>
            <a href="">Pesanan Saya</a>
          </li>
          <li>
            <a href="">Daftar Order</a>
          </li>
        </ul>
      
      </div>

      @auth
          <div>
            <p>Welcome {{ $auth->user()->namalengkap }}</p>
          </div>

        @else

        <div class="absolute right-40 flex items-center bg-white text-black px-4 py-1 rounded-xl hover:text-pink-500">
          <a href="/login">Login</a>
        </div>

      @endauth
      
    
      
     
      
    </nav>
<!-- //navigation -->

<script>
  document.getElementById('nav-toggle').addEventListener('click', function() {
    document.getElementById('nav-content').classList.toggle('hidden');
  });
</script>
