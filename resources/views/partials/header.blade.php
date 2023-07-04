{{-- HEADER --}}

<header>
    {{-- Navbar --}}
    <nav class="bg-success">
        {{-- Content --}}
        <div class="container">
            <div class="row py-2">
                {{-- Logo --}}
                <div class="col d-flex align-items-center">
                    <div id="logoBox">
                        <img class="img-fluid"
                            src="https://png2.cleanpng.com/sh/cd852e6bc98dcf1e616ebf82136c9bc9/L0KzQYm3UsAzN6l8iZH0aYP2gLBuTfFvaaNogOs2c4nwcrFzTfFvaaNogNt8bT32ebj1TfNtcaEyeeR9LXHxccPqiQkueJ9sReZ7YX72gLL5hf51NZpyedluLUXkR4TthvJmbJZpeqM6LkO3QIG8WMg5OWY2T6cAMUW4QIq4UsgveJ9s/kisspng-anarchy-symbol-anarchism-sign-clip-art-anarchy-png-transparent-image-5a73ffbededb11.3400588815175515509128.png"
                            alt="">
                    </div>
                    <div class="d-flex align-items-center">
                        @foreach ($links as $link)
                            <a class="text-white px-2" href="{{ $link['href'] }}">
                                {{ $link['text'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
                {{-- Title-Site --}}
                <div class="col text-center">
                    <h1>Title</h1>
                </div>
                {{-- Icon-Menu --}}
                <div class="col d-flex align-items-center justify-content-end">
                    <div class="d-flex">
                        <div class="btn">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="btn">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <div class="btn">
                            <i class="fa-solid fa-inbox"></i>
                        </div>
                    </div>
                    {{-- EXTRA ICON --}}
                    {{-- <div class="d-flex">
                        <div class="btn">
                            <i class="fa-solid fa-bell"></i>
                        </div>
                        <div class="btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="btn">
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

    </nav>
    <div class="jubotronCustom bg-warning">
        <h2>Jumbotron</h2>
    </div>

</header>
