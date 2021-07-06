<section class="page-section clearfix">
    <div class="container">
        @foreach ($homesOnes as $homesOne)
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src='img/intro.jpg' alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{$homesOne->sectionUpper}}</span>
                        <span class="section-heading-lower">{{$homesOne->sectionLower}}</span>
                    </h2>
                    <p class="mb-3">{{$homesOne->paragraph}}
                    </p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#">{{$homesOne->button}}</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
