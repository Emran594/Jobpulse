@extends('layout.company.sidenav-layout')
@section('content')
    <div class="page-content">
        <div class="container-fuild">
            <header class="resume-header pb-3 mb-3">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="{{ asset($candidate->image) }}" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-gray text-uppercase text-uppercase">{{$candidate->first_name}} {{$candidate->last_name}}</h1>
							    <div class="title mb-3">Full Stack Developer</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>{{$candidate->email}}</a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>{{$candidate->phone}}</a></li>
							    </ul>
						    </div>
					    </div>					    
				    </div>
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <h2><a class="btn btn-success" href="{{ url('/hired',$candidate->id) }}">Hire This Candidate</a></h2>
                        </div>
                    </div>
                    
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0">Summarise your career here. <a class="text-reset text-link" href="https://themes.3rdwavemedia.com/resources/sketch-template/pillar-sketch-sketch-resume-template-for-developers/" target="_blank">You can make a PDF version of your resume using our free Sketch template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
                                    @foreach ($candidate->experiences as $experience)
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">{{ $experience->title }}</h3>
										    </div>
										    <div class="resume-position-time">{{ date('jS F Y', strtotime($experience->from_date)) }} <span class="text-bold">To</span> {{ date('jS F Y', strtotime($experience->to_date)) }}</div>
									    </div>
									    <div class="resume-timeline-item-desc">
										    <p>{{ $experience->description }}</p>
									    </div>
									    <div class="resume-timeline-item-desc">
										    <p>{{ $experience->responsibility }}</p>
									    </div>

								    </article>
                                    @endforeach					    
							    </div>		    
						    </div>
					    </section><!--//experience-section-->
				    </div>
				    <div class="col-lg-3">
                        <section class="resume-section skills-section mb-5">
                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                            <div class="resume-section-content">
                                @foreach ($candidate->skills as $skill)
                                <div class="resume-skill-item">
                                    <h4 class="resume-skills-cat font-weight-bold">{{ $skill->title }}</h4>
                                    <ul class="list-unstyled mb-4">
                                        @foreach (explode(',', $skill->value) as $value)
                                        <li class="mb-2">
                                            <div class="resume-skill-name">{{ $value }}</div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </section>
                        
                        
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
                                    @foreach ($candidate->educations as $education)                                       
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">{{ $education->title }}</div>
								        <div class="resume-degree-org">{{ $education->group }}</div>
								        <div class="resume-degree-time">{{ $education->year }}</div>
								        <div class="resume-degree-time">{{ $education->result }}</div>
								    </li>
                                    @endforeach
							    </ul>
						    </div>
					    </section>
					    
				    </div>
			    </div><!--//row-->
		    </div>
        </div>
    </div>
@endsection