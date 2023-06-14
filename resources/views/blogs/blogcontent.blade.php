@extends('main')
@section('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/template/images/slide/slide-3.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            {{$blog->name}}
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-52 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!--  -->
                        <div class="wrap-pic-w how-pos5-parent">
                            <img src="{{ $blog->image }}" alt="IMG-BLOG">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
                                <span class="stext-109 cl3 txt-center">
									Jan 2023
								</span>
                            </div>
                        </div>

                        <div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									june, 2023
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

							</span>

                            <h4 class="ltext-109 cl2 p-b-28">
                                {{ $blog->name }}
                            </h4>

                            <p class="stext-117 cl6 p-b-26">
                                {{ $blog->content }}
                            </p>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
