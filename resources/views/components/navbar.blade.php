<div class="fixed top-0 left-0 w-full z-50">
    <!-- Yellow Nav -->
    <div id="yellowNav" class="bg-yellow-300 w-full h-10 py-1 px-4 flex flex-row justify-end items-center gap-3 transition-transform duration-300">
        <a href="#Admisi" class="text-blue-950 text-xs font-bold">Admisi</a>
        <p class="text-blue-950 text-xs font-bold">|</p>
        <a href="#Admisi" class="text-blue-950 text-xs font-bold">UII Gateway</a>
        <p class="text-blue-950 text-xs font-bold">|</p>
        <a href="#Admisi" class="text-blue-950 text-xs font-bold">Email</a>
        <p class="text-blue-950 text-xs font-bold">|</p>
        <a href="#Admisi" class="text-blue-950 text-xs font-bold">Kontak</a>
        <p class="text-blue-950 text-xs font-bold">|</p>
        <a href="#Admisi" class="text-blue-950 text-xs font-bold flex"><img alt="indo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFASURBVHjaYrwvyMzw6S8DGPwD0//ACAj+wNj/kNgAAcTC8P6vUF87UPr/v38M//79//v3/18g+Yfh35//v//++/vn/x8g+v3/N4hxe9YigABiYWAGG/biOQNI6V+wNBj9/f0PqOj3738g1b////rFLCUNtAEggFgY/jIAjYSo/gdWygBU8ec3iP37z7/fv0DsXyARxj9AOQaAAGIBOe7b179fPv3/85cBah5Q6a9/v8HafoOM//frF1CckYf3FwMDQACxCOSmctjY//34EeSef2AEchiY8QfsB4jlf/8yCwiKnT8LEECMf/+CguY/EDCAIW7AxMT0/v17gABi+ffvHyMjI0g9Az7VEFmgLwACiAmoAb9SNG0AAQSyAWgXRA8DDADtZEABQC5IFqgYIIBAGn78+PEPAhjAEAeAaAUIMAD/YnbumkL3sQAAAABJRU5ErkJggg==" /></a>
        <p class="text-blue-950 text-xs font-bold">|</p>
        <a href="#Admisi" class="text-blue-950 text-xs font-bold"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAflJREFUeNpinDRzn5qN3uFDt16+YWBg+Pv339+KGN0rbVP+//2rW5tf0Hfy/2+mr99+yKpyOl3Ydt8njEWIn8f9zj639NC7j78eP//8739GVUUhNUNuhl8//ysKeZrJ/v7z10Zb2PTQTIY1XZO2Xmfad+f7XgkXxuUrVB6cjPVXef78JyMjA8PFuwyX7gAZj97+T2e9o3d4BWNp84K1NzubTjAB3fH0+fv6N3qP/ir9bW6ozNQCijB8/8zw/TuQ7r4/ndvN5mZgkpPXiis3Pv34+ZPh5t23//79Rwehof/9/NDEgMrOXHvJcrllgpoRN8PFOwy/fzP8+gUlgZI/f/5xcPj/69e/37//AUX+/mXRkN555gsOG2xt/5hZQMwF4r9///75++f3nz8nr75gSms82jfvQnT6zqvXPjC8e/srJQHo9P9fvwNtAHmG4f8zZ6dDc3bIyM2LTNlsbtfM9OPHH3FhtqUz3eXX9H+cOy9ZMB2o6t/Pn0DHMPz/b+2wXGTvPlPGFxdcD+mZyjP8+8MUE6sa7a/xo6Pykn1s4zdzIZ6///8zMGpKM2pKAB0jqy4UE7/msKat6Jw5mafrsxNtWZ6/fjvNLW29qv25pQd///n+5+/fxDDVbcc//P/zx/36m5Ub9zL8+7t66yEROcHK7q5bldMBAgwADcRBCuVLfoEAAAAASUVORK5CYII=" alt="eng"></a>
    </div>

    <!-- White Nav -->
    <div class="bg-white py-4 flex flex-row justify-between items-center sticky top-0 px-10 shadow-md transition-transform duration-300" id="whiteNav">
        <div>
            <img src="https://www.uii.ac.id/wp-content/uploads/2021/12/Logo-Web-80-1.png" alt="logo" class="w-auto h-16">
        </div>
        <div class="flex flex-row gap-5 pr-20">
            <a href="#Pendidikan" class="uppercase text-md text-black hover:text-yellow-500 duration-150 transition-all font-bold">Pendidikan</a>
            <a href="#Penelitian" class="uppercase text-md text-black hover:text-yellow-500 duration-150 transition-all font-bold">Penelitian</a>
            <a href="#Pengabdian" class="uppercase text-md text-black hover:text-yellow-500 duration-150 transition-all font-bold">Pengabdian</a>
            <a href="#Internasional" class="uppercase text-md text-black hover:text-yellow-500 duration-150 transition-all font-bold">Internasional</a>
            <a href="#Layanan" class="uppercase text-md text-black hover:text-yellow-500 duration-150 transition-all font-bold">Layanan</a>
            <a href="#Profil" class="uppercase text-md text-black hover:text-yellow-500 duration-150 transition-all font-bold">Profil</a>
        </div>
    </div>

    <script>
        let lastScrollTop = 0;
        const yellowNav = document.getElementById("yellowNav");

        window.addEventListener("scroll", function() {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Scrolling Down → Hide yellow nav
                yellowNav.classList.add("-translate-y-full");
                whiteNav.classList.add("-translate-y-10");
            } else {
                // Scrolling Up → Show yellow nav
                yellowNav.classList.remove("-translate-y-full");
                whiteNav.classList.remove("-translate-y-10");
            }

            lastScrollTop = scrollTop;
        });
    </script>

</div>