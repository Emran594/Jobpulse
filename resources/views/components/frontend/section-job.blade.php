<section class="section" id="findJob">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your <span class="text-primary">Career</span> You Deserve it</h1>
                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            @isset($data)

            @foreach ($data as $item)
            @if(session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-warning-subtle rounded">
                                    @isset($item->company->logo)
                                    <img src="{{ $item->company->logo }}" alt="" class="avatar-xxs">
                                    @endisset
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="{{ url('/single-job',$item->id) }}">
                                    <h5>{{ $item->title }}</h5>
                                </a>
                                <ul class="list-inline text-muted mb-3">
                                    <li class="list-inline-item">
                                        <i class="ri-building-line align-bottom me-1"></i>{{ $item->company->name }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-map-pin-2-line align-bottom me-1"></i> {{ $item->company->location }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-money-dollar-circle-line align-bottom me-1"></i> {{ $item->salary }}
                                    </li>
                                </ul>
                                <div class="hstack gap-2">
                                @php
                                $badgeColors = ['primary', 'success', 'danger', 'warning', 'info']; // Define badge colors
                                $colorIndex = 0; // Initialize color index
                                @endphp
                                @foreach (explode(',', $item->tags) as $tag)
                                <span class="badge bg-{{ $badgeColors[$colorIndex] }}-subtle text-{{ $badgeColors[$colorIndex] }}">{{ $tag }}</span>
                                @php
                                    $colorIndex = ($colorIndex + 1) % count($badgeColors); // Move to the next color
                                @endphp
                                @endforeach
                                </div>
                            </div>
                            <div>
                                <a href="{{ url('/apply-job',$item->id)}}" class="btn btn-icon">
                                    <span class="icon-on"><i class="ri-bookmark-line">Quick Apply</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</section>
