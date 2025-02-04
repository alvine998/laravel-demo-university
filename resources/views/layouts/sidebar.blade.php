<div id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-blue-200 text-black transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-50">
    <div class="p-5 text-center border-b border-white">
        <h2 class="text-lg font-bold">Admin Panel</h2>
    </div>

    <nav class="mt-5">
        <a href="{{ route('dashboard') }}" class="block py-2.5 px-5 hover:bg-blue-400 duration-300 transition-all"><i class="fa fa-home w-5"></i> Dashboard</a>
        <a href="{{ route('users') }}" class="block py-2.5 px-5 hover:bg-blue-400 duration-300 transition-all"><i class="fa fa-user w-5"></i> Pengguna</a>
        <a href="{{ route('logout') }}" class="block py-2.5 px-5 hover:bg-red-600 text-black hover:text-white duration-300 transition-all"><i class="fa fa-sign-out w-5"></i> Logout</a>
    </nav>
</div>
