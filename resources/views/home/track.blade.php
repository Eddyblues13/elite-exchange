@include('home.header')
<main>
    <article>













        <section class="section newsletter" aria-label="newsletter">
            <div class="container">

                <figure class="newsletter-banner img-holder">
                    <img src="./assets/images/newsletter-banner.png" width="303" height="381" alt="newsletter banner"
                        class="w-100">
                </figure>

                <div class="newsletter-content">

                    <h2 class="h2 section-title">Enter Your Tracking Number</h2>
                    <form action="{{ route('package')}}" method="POST" class="newsletter-form">
                        @csrf
                        <input type="text" name="search" placeholder="Enter Your Tracking Number" aria-label="email"
                            class="email-field">

                        <button type="submit" class="newsletter-btn">Track</button>
                    </form>
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        <b>Error!</b>{{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @elseif (session('status'))
                    <div class="alert alert-success" role="alert">
                        <b>Success!</b> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @elseif (session('message'))
                    <div class="alert alert-success" role="alert">
                        <b>Success!</b> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                </div>

            </div>
        </section>
    </article>
</main>
@include('home.footer')