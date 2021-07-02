<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{ $storeText->sectionUpper }}</span>
                        <span class="section-heading-lower">{{ $storeText->sectionLower }}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->Su}}
                            <span class="ml-auto">{{$status->closed}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->M}}
                            <span class="ml-auto">{{$hours->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->T}}
                            <span class="ml-auto">{{$hours->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->W}}
                            <span class="ml-auto">{{$hours->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->Th}}
                            <span class="ml-auto">{{$hours->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->F}}
                            <span class="ml-auto">{{$hours->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$days->S}}
                            <span class="ml-auto">{{$hours->shortDay}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$contact->street}}</strong>
                            <br>
                            >{{$contact->city}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>>{{$contact->call}}</em>
                        </small>
                        <br>
                        >{{$contact->number}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
