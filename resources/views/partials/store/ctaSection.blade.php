<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{ $storeTexts[0]->sectionUpper }}</span>
                        <span class="section-heading-lower">{{ $storeTexts[0]->sectionLower }}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day1}}
                            <span class="ml-auto">{{$storeStatus[0]->close}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day7}}
                            <span class="ml-auto">{{$storeHour[0]->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day6}}
                            <span class="ml-auto">{{$storeHour[0]->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day5}}
                            <span class="ml-auto">{{$storeHour[0]->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day4}}
                            <span class="ml-auto">{{$storeHour[0]->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day3}}
                            <span class="ml-auto">{{$storeHour[0]->longDay}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$storeDays[0]->day2}}
                            <span class="ml-auto">{{$storeHour[0]->shortDay}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$storeContact[0]->street}}</strong>
                            <br>
                            >{{$storeContact[0]->city}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>>{{$storeContact[0]->call}}</em>
                        </small>
                        <br>
                        >{{$storeContact[0]->number}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
