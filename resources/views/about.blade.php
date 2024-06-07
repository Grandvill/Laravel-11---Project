<x-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <x-slot:title>{{ $title }}</x-slot:title>
    <main id="main">
        <section>
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-12 text-center mb-5">
                <h1 class="page-title">About us</h1>
              </div>
            </div>

            <div class="row mb-5">

              <div class="d-md-flex post-entry-2 half">
                <a href="#" class="me-4 thumbnail">
                  <img src="{{ url('img/post-landscape-2.jpg') }}" alt="" class="img-fluid" style="height: 400px; width: 2800px; margin-left: -30px">
                </a>
                <div class="ps-md-5 mt-4 mt-md-0" style="margin-left: -20px">
                    <div class="post-meta mt-4">About us</div>
                    <h2 class="mb-4 display-4">Sejarah Perusahaan</h2>

                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                    <p style="text-align: justify;">Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                </div>

              </div>

              <div class="d-md-flex post-entry-2 half" style="margin-top: 100px">
                <a href="#" class="me-4 thumbnail order-2">
                  <img src="{{ url('img/post-landscape-1.jpg') }}" alt="" class="img-fluid" style="height: 400px; width: 2800px; margin-left: 40px">
                </a>
                <div class="pe-md-5 mt-4 mt-md-0" style="margin-left: -40px">
                  <div class="post-meta mt-4">Visi &amp; Misi</div>
                  <h2 class="mb-4 display-4">Visi &amp; Misi</h2>

                  <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                  <p style="text-align: justify">Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                </div>
              </div>

            </div>

          </div>
        </section>

        <section class="mb-5 bg-light py-5">
          <div class="container" data-aos="fade-up">
            <div class="row justify-content-between align-items-lg-center" style="margin-left: 20px">
              <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="display-4 mb-4">Latest News</h2>
                <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem eaque vel est asperiores iste pariatur placeat molestias, rerum provident ea maiores debitis eum earum esse quas architecto! Minima, voluptatum! Minus tempora distinctio quo sint est blanditiis voluptate eos. Commodi dolore nesciunt culpa adipisci nemo expedita suscipit autem dolorum rerum?</p>
                <p style="text-align: justify">At magni dolore ullam odio sapiente ipsam, numquam eius minus animi inventore alias quam fugit corrupti error iste laboriosam dolorum culpa doloremque eligendi repellat iusto vel impedit odit cum. Sequi atque molestias nesciunt rem eum pariatur quibusdam deleniti saepe eius maiores porro quam, praesentium ipsa deserunt laboriosam adipisci. Optio, animi!</p>
                <p><a href="/posts" class="more">View All Blog Posts</a></p>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-6">
                    <img src="{{ url('img/post-portrait-3.jpg') }}" alt="" class="img-fluid mb-4" style="margin-left: -20px">
                  </div>
                  <div class="col-6 mt-4">
                    <img src="{{ url('img/post-portrait-4.jpg') }}" alt="" class="img-fluid mb-4" style="margin-left: -20px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    </main>
</x-layout>

{{-- Footer --}}
<div class="w-full">
    <footer class="bg-gray-800 shadow dark:bg-gray-800 h-20 flex justify-center">
        <div class=" p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-300  dark:text-gray-400">Made by : Zahidan Ardhiansyah</span>
        </div>
    </footer>
</div>
