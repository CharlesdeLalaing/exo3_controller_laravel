<section class="page-section">
    <div class="container">
        @foreach ($productSections as $productSection)
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ml-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">{{ $productSection->sectionUpper }}</span>
                            <span class="section-heading-lower">{{ $productSection->sectionLower }}</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                    src="{{ $productSection->image }}" alt="">
                <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">{{ $productSection->paragraph }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
