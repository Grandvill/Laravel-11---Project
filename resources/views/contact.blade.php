<x-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="p-5" id="contact">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Us</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <i class="bi bi-geo-alt"></i>
                            <span class="fw-bold">Location : </span>
                            <br />Jakarta Pusat, DKI Jakarta
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-telephone"></i>
                            <span class="fw-bold">WhatsApp : </span>
                            <br />(+62) 123-4567-8910
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-instagram"></i>
                            <span class="fw-bold">Instagram : </span>
                            <br />@grandvillblog
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-envelope"></i>
                            <span class="fw-bold">Email : </span>
                            <br />grandvillblog@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <img class="img-fluid d-none d-none d-sm-block ml-20" src="{{ url('img/contact.svg') }}" alt="header" />
                </div>
            </div>
        </div>
    </section>

    <div class="mt-36">
        <h1 style="font-size: 36px; justify-content: center;" class="text-center">Saran & Masukan</h1>
    </div>

    <div class="container p-3">
        <form style="max-width: 800px; margin: 0 auto;">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                <textarea id="message" rows="4" class="form-control" placeholder="Write your thoughts here..."></textarea>
            </div>
            <div class="mb-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    {{-- map --}}
    <div class="container" style="padding-bottom: 30px; padding-top: 30px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.57158667264!2d106.83219517803022!3d-6.178532810257011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sus!4v1717692650877!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </x-layout>

    {{-- Footer --}}
        <div class="w-full">
            <footer class="bg-gray-800 shadow dark:bg-gray-800 h-20 flex justify-center">
                <div class="p-4 md:flex md:items-center md:justify-between">
                    <span class="text-sm text-gray-300  dark:text-gray-400">Made by : Zahidan Ardhiansyah</span>
                </div>
            </footer>
        </div>
